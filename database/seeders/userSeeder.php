<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstName' => 'User',
            'lastName' => 'Satu',
            'email' => 'user1@gmail.com',
            'displayPicture' => '',
            'password' => bcrypt('latolato'),
            'roleId' => 2,
            'genderId' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'firstName' => 'Admin',
            'lastName' => 'Satu',
            'email' => 'admin1@gmail.com',
            'displayPicture' => '',
            'password' => bcrypt('latolato'),
            'roleId' => 1,
            'genderId' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'firstName' => 'Admin',
            'lastName' => 'Dua',
            'email' => 'admin2@gmail.com',
            'displayPicture' => '',
            'password' => bcrypt('latolato'),
            'roleId' => 1,
            'genderId' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'firstName' => 'User',
            'lastName' => 'Dua',
            'email' => 'user2@gmail.com',
            'displayPicture' => '',
            'password' => bcrypt('latolato'),
            'roleId' => 2,
            'genderId' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
