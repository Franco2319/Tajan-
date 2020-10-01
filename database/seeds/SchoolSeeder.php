<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
           'name' => 'Tajana1',
           'password' => 'GoldaMeir1'
        ]);
        DB::table('schools')->insert([
            'name' => 'Tajana2',
            'password' => 'BenGurion2'
         ]);
         DB::table('schools')->insert([
            'name' => 'Tajana3',
            'password' => 'Hertzl3'
         ]);
         DB::table('schools')->insert([
            'name' => 'Tajana4',
            'password' => 'MosheDayan4'
         ]);
    }
}
