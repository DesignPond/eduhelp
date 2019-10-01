<?php

use Illuminate\Database\Seeder;

class MappingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mappings')->truncate();

        $mappings = [
            ['type_id' => 1, 'zotero' => 'Résumé', 'cls' => 'abstract', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Modifié', 'cls' => 'accessed', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Date', 'cls' => 'issued', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Langue', 'cls' => 'language', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Extra', 'cls' => 'note', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'N° du document', 'cls' => 'number', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Pages', 'cls' => 'page', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Titre', 'cls' => 'title', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Titre abrégé', 'cls' => 'title-short', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'URL', 'cls' => 'URL', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Auteur', 'cls' => 'author', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Histoire', 'cls' => 'references', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Section', 'cls' => 'section', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Session', 'cls' => 'chapter-number', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Corps législatif', 'cls' => 'authority', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Volumes de codes', 'cls' => 'number-of-volumes', 'used' => null, 'optional' => null],
            ['type_id' => 1, 'zotero' => 'Lieu', 'cls' => 'event-place', 'used' => null, 'optional' => null],

            ['type_id' => 2, 'zotero' => 'Résumé', 'cls' => 'abstract', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Modifié', 'cls' => 'accessed', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Date', 'cls' => 'issued', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Langue', 'cls' => 'language', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Extra', 'cls' => 'note', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Article ou disposition?', 'cls' => 'number', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Pages', 'cls' => 'page', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Titre', 'cls' => 'title', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Titre abrégé', 'cls' => 'title-short', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'URL', 'cls' => 'URL', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Auteur', 'cls' => 'author', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Histoire', 'cls' => 'references', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Section', 'cls' => 'section', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Session', 'cls' => 'chapter-number', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Corps législatif', 'cls' => 'authority', 'used' => null, 'optional' => null],
            ['type_id' => 2, 'zotero' => 'Code', 'cls' => 'container-title', 'used' => null, 'optional' => null],

            ['type_id' => 3, 'zotero' => 'Résumé', 'cls' => 'abstract', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Modifié', 'cls' => 'accessed', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Promulgé le', 'cls' => 'issued', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Langue', 'cls' => 'language', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Extra', 'cls' => 'note', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'N° officiel de l\'acte', 'cls' => 'number', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Pages', 'cls' => 'page', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Titre de l\'acte', 'cls' => 'title', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Titre abrégé', 'cls' => 'title-short', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'URL', 'cls' => 'URL', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Auteur', 'cls' => 'author', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Code', 'cls' => 'container-title', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Histoire', 'cls' => 'references', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'N° de code', 'cls' => 'volume', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Session', 'cls' => 'chapter-number', 'used' => null, 'optional' => null],
            ['type_id' => 3, 'zotero' => 'Section', 'cls' => 'section', 'used' => null, 'optional' => null],

            ['type_id' => 4, 'zotero' => 'Résumé', 'cls' => 'abstract', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Modifié', 'cls' => 'accessed', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Date de décision', 'cls' => 'issued', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Langue', 'cls' => 'language', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Extra', 'cls' => 'note', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'N° de requête', 'cls' => 'number', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Première page', 'cls' => 'page', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Nom de l\'affaire', 'cls' => 'title', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Titre abrégé', 'cls' => 'title-short', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'URL', 'cls' => 'URL', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Auteur', 'cls' => 'author', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Journaliste', 'cls' => 'container-title', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Histoire', 'cls' => 'references', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Volume de requête', 'cls' => 'volume', 'used' => null, 'optional' => null],
            ['type_id' => 4, 'zotero' => 'Tribunal', 'cls' => 'authority', 'used' => null, 'optional' => null],

        ];

        // Uncomment the below to run the seeder
        DB::table('mappings')->insert($mappings);
    }
}
