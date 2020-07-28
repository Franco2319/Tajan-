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
           'name' => 'Usuario1',
           'password' => 'Password1'
        ]);
        DB::table('schools')->insert([
            'name' => 'Usuario2',
            'password' => 'Password2'
         ]);
         DB::table('schools')->insert([
            'name' => 'Usuario3',
            'password' => 'Password3'
         ]);
         DB::table('schools')->insert([
            'name' => 'Usuario4',
            'password' => 'Password4'
         ]);
    }
}
