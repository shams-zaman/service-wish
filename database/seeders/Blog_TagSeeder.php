<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tag')->insert([
            'blog_id' => '1',
            'tag_id' => '1',
        ]);
        DB::table('blog_tag')->insert([
            'blog_id' => '2',
            'tag_id' => '1',
        ]);
        DB::table('blog_tag')->insert([
            'blog_id' => '3',
            'tag_id' => '1',
        ]);
        DB::table('blog_tag')->insert([
            'blog_id' => '4',
            'tag_id' => '2',
        ]);
    }
}
