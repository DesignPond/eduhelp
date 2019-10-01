<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('types')->truncate();

        $types = array(
            ['rank' => 1, 'used' => 1, 'name' => 'Audience','slug' => 'bill'], //1
            ['rank' => 2, 'used' => 1, 'name' => 'Proposition de loi','slug' => 'bill'],//2
            ['rank' => 3, 'used' => 1, 'name' => 'Acte juridique','slug' => 'legislation'],//3
            ['rank' => 0, 'used' => 1, 'name' => 'Affaire','slug' => 'legal_case'],//4
            ['rank' => 0, 'used' => 1, 'name' => 'Article de revue','slug' => 'article-journal'],//5
            ['rank' => 0, 'used' => 1, 'name' => 'Article de magazine','slug' => 'article-magazine'],//6
            ['rank' => 0, 'used' => 1, 'name' => 'Article de journal','slug' => 'article-newspaper'],//7
            ['rank' => 0, 'used' => 1, 'name' => 'Article de colloque','slug' => 'paper-conference'],//8
            ['rank' => 0, 'used' => 1, 'name' => 'Article de dictionnaire','slug' => 'entry-dictionary'],//9
            ['rank' => 0, 'used' => 1, 'name' => 'Article d\'encyclopédie','slug' => 'entry-encyclopedia'],//10
            ['rank' => 0, 'used' => 1, 'name' => 'Manuscrit','slug' => 'manuscript'],//11
            ['rank' => 0, 'used' => 1, 'name' => 'Document','slug' => 'article'],//12
            ['rank' => 4, 'used' => 1, 'name' => 'Livre','slug' => 'book'],//13
            ['rank' => 5, 'used' => 1, 'name' => 'Chapitre de livre','slug' => 'chapter'],//14
            ['rank' => 6, 'used' => 1, 'name' => 'Page Web /Billet de blog','slug' => 'webpage'],//15
            ['rank' => 0, 'used' => 1, 'name' => 'Rapport','slug' => 'report'],//16
            ['rank' => 7, 'used' => 1, 'name' => 'Thèse','slug' => 'thesis'],//17

            ['rank' => 0, 'used' => null, 'name' => 'Illustration','slug' => 'graphic'],
            ['rank' => 0, 'used' => null, 'name' => 'Enregistrement audio','slug' => 'song'],
            ['rank' => 0, 'used' => null, 'name' => 'Programme informatique','slug' => 'book'],
            ['rank' => 0, 'used' => null, 'name' => 'Film','slug' => 'motion_picture'],
            ['rank' => 0, 'used' => null, 'name' => 'Message de forum','slug' => 'post'],
            ['rank' => 0, 'used' => null, 'name' => 'Message instantané','slug' => 'personal_communication'],
            ['rank' => 0, 'used' => null, 'name' => 'Lettre','slug' => 'personal_communication'],
            ['rank' => 0, 'used' => null, 'name' => 'Interview','slug' => 'interview'],
            ['rank' => 0, 'used' => null, 'name' => 'Carte','slug' => 'map'],
            ['rank' => 0, 'used' => null, 'name' => 'Brevet','slug' => 'patent'],
            ['rank' => 0, 'used' => null, 'name' => 'Balado (Podcast)','slug' => 'song'],
            ['rank' => 0, 'used' => null, 'name' => 'Présentation','slug' => 'speech'],
            ['rank' => 0, 'used' => null, 'name' => 'Émission de radio','slug' => 'broadcast'],
            ['rank' => 0, 'used' => null, 'name' => 'Émission de TV','slug' => 'broadcast'],
            ['rank' => 0, 'used' => null, 'name' => 'Enregistrement vidéo','slug' => 'motion_picture'],
            ['rank' => 0, 'used' => null, 'name' => 'Courriel','slug' => 'personal_communication'],
        );

        // Uncomment the below to run the seeder
        DB::table('types')->insert($types);
    }
}
