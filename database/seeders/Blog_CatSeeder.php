<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog_CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_cat')->insert([
            'blog_id' => '1',
            'cat_id' => '1',
        ]);
        DB::table('blog_cat')->insert([
            'blog_id' => '2',
            'cat_id' => '1',
        ]);
        DB::table('blog_cat')->insert([
            'blog_id' => '3',
            'cat_id' => '1',
        ]);
        DB::table('blog_cat')->insert([
            'blog_id' => '4',
            'cat_id' => '2',
        ]);
    }
}
