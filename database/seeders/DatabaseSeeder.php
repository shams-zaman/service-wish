<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\CatSeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\AgentSeeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CatSeeder::class);
        $this->call(SpSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
