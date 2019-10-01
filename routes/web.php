<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $links = \App\Link::all();
    $types = \App\Type::where('used','=',1)->orderBy('rank','DESC')->get();
    $nonused = \App\Type::whereNull('used')->get();

    $bibliographie = \App\Sorting::with(['mapping'])->where('display','=','bibliographie')->get();
    $bibliographie = $bibliographie->map(function ($item) {
        return [
            'cls'     => $item->mapping->cls,
            'zotero'  => $item->mapping->zotero,
            'type_id' => $item->mapping->type_id,
            'rank'    => $item->rank,
        ];
    })->groupBy('type_id')->map(function ($biblio) {
        list($used, $notused) = collect($biblio)->partition(function ($i) {
            return $i['rank'];
        });

        return [
            'used' => $used->sortBy('rank'),
            'notused' => $notused,
        ];
    })->sortKeys();


    $citations = \App\Sorting::with(['mapping'])->where('display','=','citation')->get();
    $citations = $citations->map(function ($item) {
        return [
            'cls'     => $item->mapping->cls,
            'zotero'  => $item->mapping->zotero,
            'type_id' => $item->mapping->type_id,
            'rank'    => $item->rank,
        ];
    })->groupBy('type_id')->map(function ($biblio) {
        list($used, $notused) = collect($biblio)->partition(function ($i) {
            return $i['rank'];
        });

        return [
            'used' => $used->sortBy('rank'),
            'notused' => $notused,
        ];
    })->sortKeys();

/*    list($used, $notused) = collect($bibliographie)->partition(function ($i) {
        return $i['used'];
    });

    echo '<pre>';
    print_r($citations->sortKeys());
    echo '</pre>';
    exit();
    */

    return view('welcome')->with(['links' => $links, 'types' => $types, 'nonused' => $nonused, 'citations' => $citations, 'bibliographie' => $bibliographie]);
});

use App\Imports\MapImport;

Route::get('/import', function () {

    function insert_all($prepared){
        foreach ($prepared as $new){
            $map = \App\Mapping::create($new['model']);
            foreach ($new['sortings'] as $ranking){
                $sort = new App\Sorting($ranking);
                $map->sorting()->save($sort);
            }
        }
    }

    $files = [
        'article_journal',
        'article_magazine',
        'article_newspaper',
        'article',
        'audience',
        'book',
        'chapter',
        'entry-dictionary',
        'entry-encyclopedia',
        'legal_case',
        'legislation',
        'loi',
        'manuscript',
        'paper_conference',
        'report',
        'thesis',
        'webpage',
    ];

    foreach ($files as $file){

        $results = \Excel::toArray(new MapImport(), public_path('imports/'.$file.'.xlsx'));

        $prepared = collect($results)
            ->map(function ($row, $key) {

                return collect($row)->reject(function ($item) {
                    return empty($item[0]);
                })->map(function ($item, $key) {
                    return  [
                        'model' => [
                            'cls' => $item[0],
                            'zotero' => $item[1],
                            'type_id' => $item[2],
                            'used' => $item[4] > 0 || $item[6] > 0 ? 1 : null,
                        ],
                        'sortings' => [
                            ['display' => 'bibliographie', 'rank' => $item[4]],
                            ['display' =>  'citation', 'rank' => $item[6]]
                        ]
                    ];
                });

            })->flatten(1)->toArray();

        //insert_all($prepared);

        echo '<pre>';
        print_r($prepared);
        echo '</pre>';
    }


/*    $post->comments()->saveMany([
        new App\Comment(['message' => 'A new comment.']),
        new App\Comment(['message' => 'Another comment.']),
    ]);*/
});


