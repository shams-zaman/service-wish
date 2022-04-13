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
            'slug' => 'Find the best services',
            'tag_name' => 'find-the-best-services',

        ]);
        DB::table('tags')->insert([
            'tag_name' => 'web Development',
            'slug' => 'web-development',

        ]);
        DB::table('tags')->insert([
            'tag_name' => 'Seo',
            'slug' => 'seo',

        ]);
    }
}
