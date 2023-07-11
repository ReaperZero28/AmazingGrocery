<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'itemName' => 'Broccoli',
            'itemDesc' => 'Limited and Fresh Broccoli',
            'price' => '15000',
            'image' => 'Broccoli.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Carrot',
            'itemDesc' => 'Limited and Fresh Carrot',
            'price' => '10000',
            'image' => 'Carrot.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Spinach',
            'itemDesc' => 'Limited and Fresh Spinach',
            'price' => '20000',
            'image' => 'Spinach.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Cabbage',
            'itemDesc' => 'Limited and Fresh Cabbage',
            'price' => '25000',
            'image' => 'Cabbage.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Lettuce',
            'itemDesc' => 'Limited and Fresh Lettuce',
            'price' => '15000',
            'image' => 'Lettuce.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Chili',
            'itemDesc' => 'Limited and Fresh Chili',
            'price' => '7500',
            'image' => 'Chili.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Onion',
            'itemDesc' => 'Limited and Fresh Onion',
            'price' => '5000',
            'image' => 'Onion.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Beans',
            'itemDesc' => 'Limited and Fresh Beans',
            'price' => '5000',
            'image' => 'Beans.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Tomato',
            'itemDesc' => 'Limited and Fresh Tomato',
            'price' => '5000',
            'image' => 'Tomato.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Cucumber',
            'itemDesc' => 'Limited and Fresh Cucumber',
            'price' => '10000',
            'image' => 'Cucumber.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Pumpkin',
            'itemDesc' => 'Limited and Fresh Pumpkin',
            'price' => '20000',
            'image' => 'Pumpkin.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Eggplant',
            'itemDesc' => 'Limited and Fresh Eggplant',
            'price' => '15000',
            'image' => 'Eggplant.png',
        ]);

        DB::table('items')->insert([
            'itemName' => 'Corn',
            'itemDesc' => 'Limited and Fresh Corn',
            'price' => '10000',
            'image' => 'Corn.png',
        ]);
    }
}
