<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            'cat_name' => 'Web Development',
            'slug' => 'web-development'

        ]);
        DB::table('cats')->insert([
            'cat_name' => 'SEO',
            'slug' => 'seo'

        ]);
    }
}
