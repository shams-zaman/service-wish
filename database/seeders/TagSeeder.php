<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'slug' => 'find-the-best-services',

        ]);
        DB::table('tags')->insert([
            'slug' => 'web-development',

        ]);
        DB::table('tags')->insert([
            'slug' => 'seo',

        ]);
    }
}
