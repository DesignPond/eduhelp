<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LinkTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        // $this->call(MappingTableSeeder::class);
    }
}
