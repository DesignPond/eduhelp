<?php

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('links')->truncate();

        $links = array(
            [
                'title' => 'Télécharger Zotero',
                'url'   => 'https://www.zotero.org/download',
                'main'  => 1,
            ],
            [
                'title' => 'Zotero site officiel',
                'url'   => 'https://www.zotero.org',
                'main'  => null,
            ],
            [
                'title' => 'Zotero liste de styles',
                'url'   => 'https://www.zotero.org/styles',
                'main'  => null,
            ],
            [
                'title' => 'Zotero documentation',
                'url'   => 'https://www.zotero.org/support/fr/start',
                'main'  => null,
            ],
            [
                'title' => 'Zotero types de documents et les champs associés',
                'url'   => 'https://www.zotero.org/support/fr/kb/item_types_and_fields',
                'main'  => null,
            ],
        );

        // Uncomment the below to run the seeder
        DB::table('links')->insert($links);
    }
}
