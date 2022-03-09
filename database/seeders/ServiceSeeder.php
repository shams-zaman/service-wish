<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            'title' => 'Make Custom website using laravel',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque ullam repellat laboriosam, totam tempore repellendus magnam vitae reprehenderit, voluptates iusto rerum distinctio expedita corrupti quis.',

            'sp_id' => '1'

        ]);
        DB::table('services')->insert([

            'title' => 'ADD Feature or Bug fixing',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque ullam repellat laboriosam, totam tempore repellendus magnam vitae reprehenderit, voluptates iusto rerum distinctio expedita corrupti quis.',

            'sp_id' => '1'

        ]);
        DB::table('services')->insert([

            'title' => 'Boost your facebook market Place',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque ullam repellat laboriosam, totam tempore repellendus magnam vitae reprehenderit, voluptates iusto rerum distinctio expedita corrupti quis.',
            'sp_id' => '2'

        ]);
        DB::table('services')->insert([

            'title' => 'Make atteractive email template',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque ullam repellat laboriosam, totam tempore repellendus magnam vitae reprehenderit, voluptates iusto rerum distinctio expedita corrupti quis.',

            'sp_id' => '2'

        ]);
    }
}
