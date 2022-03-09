<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            // 'username' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('aaaaaaaa'),

        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Ulass',
            // 'username' => 'author',
            'email' => 'u@u.com',
            'password' => bcrypt('uuuuuuuu'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'mostafiz',
            // 'username' => 'author',
            'email' => 'm@m.com',
            'password' => bcrypt('mmmmmmmm'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Pranto',
            // 'username' => 'author',
            'email' => 'p@p.com',
            'password' => bcrypt('pppppppp'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'dipto',
            // 'username' => 'author',
            'email' => 'd@d.com',
            'password' => bcrypt('dddddddd'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'hasib',
            // 'username' => 'author',
            'email' => 'h@h.com',
            'password' => bcrypt('hhhhhhhh'),
        ]);
    }
}
