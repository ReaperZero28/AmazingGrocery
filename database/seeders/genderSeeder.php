<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class genderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genders')->insert([
            'gender' => 'Male',
        ]);

        DB::table('genders')->insert([
            'gender' => 'Female',
        ]);
    }
}
