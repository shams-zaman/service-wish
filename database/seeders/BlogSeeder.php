<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'user_id' => '1',
            'title' => 'How to find the Best services',
            'slug' => 'how-to-find-the-best-services',
            'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores magnam quia corporis laudantium molestiae vel iste, sunt veritatis dignissimos? Reprehenderit!',
        ]);
        DB::table('blogs')->insert([
            'user_id' => '2',
            'title' => 'How to find the Seo  services',
            'slug' => 'how-to-find-the-best-services',
            'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores magnam quia corporis laudantium molestiae vel iste, sunt veritatis dignissimos? Reprehenderit!',
        ]);
        DB::table('blogs')->insert([
            'user_id' => '1',
            'title' => 'Boost your Fb Marketplace',
            'slug' => 'how-to-find-the-best-services',
            'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores magnam quia corporis laudantium molestiae vel iste, sunt veritatis dignissimos? Reprehenderit!',
        ]);
        DB::table('blogs')->insert([
            'user_id' => '2',
            'title' => 'How to find the Best services',
            'slug' => 'how-to-find-the-best-services',
            'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores magnam quia corporis laudantium molestiae vel iste, sunt veritatis dignissimos? Reprehenderit!',
        ]);
    }
}
