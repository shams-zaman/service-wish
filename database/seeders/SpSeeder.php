<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sps')->insert([
            'ag_name' => 'Ringer-SoFt',
            'ag_slug' => 'ringer-soft',
            'address' => 'Lahore, Karachi , Pakistan',
            'zip' => '4136',
            'user_id' => '1',

            'desc' => 'We are one of the largest Software farm is the Pak.We will help you to build your Dream Project using latest technologies. we are providing kdfjsfj jiijeiur  ujifo ueiu jioduf ujdifu',
            'mobile' => '+8801923717174',
            'cat_id' => '1'
        ]);
        DB::table('sps')->insert([
            'ag_name' => 'Lead Pakistan ',
            'ag_slug' => 'lead-pakistan ',
            'address' => 'Lahore, Karachi 11345, Pakistan ',
            'zip' => '4136',
            'user_id' => '2',
            'desc' => 'We are one of the largest Lead Generation  farm is the Pak.We will help you to boost your Digital Marketing process very effeciently. we are providing kdfjsfj jiijeiur  ujifo ueiu jioduf ujdifu',
            'mobile' => '+8801923717174',
            'cat_id' => '2'
        ]);
    }
}
