<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Muhmad riyan firdaus',
            'email' => 'firdausriyan402@gmail.com',
            'Admin' => '1',
            'no_hp' => '0859102724182',
            'password' => bcrypt('12007948'),
        ]);




        \App\Models\Category::create([
            'name' => 'Motor'
        ]);

        \App\Models\Category::create([
            'name' => 'Mobil'
        ]);

        \App\Models\Category::create([
            'name' => 'Playstansion'
        ]);

        \App\Models\Category::create([
            'name' => 'Sepeda'
        ]);

        \App\Models\Category::create([
            'name' => 'Helikopter'
        ]);

        \App\Models\Category::create([
            'name' => 'Pesawat pribadi'
        ]);

        \App\Models\Category::create([
            'name' => 'kapal pesiar'
        ]);

        \App\Models\Barang::create([
            'name' => 'Bugati',
            'harga' => '4000000',
            'nomorbarang' => '1',
            'category_id' => '2'
        ]);

        \App\Models\Barang::create([
            'name' => 'Sony',
            'harga' => '200000',
            'nomorbarang' => '1',
            'category_id' => '3'
        ]);

        \App\Models\Barang::create([
            'name' => 'Embraer Legacy 600',
            'harga' => '200000000',
            'nomorbarang' => '17',
            'category_id' => '6'
        ]);

        \App\Models\Barang::create([
            'name' => 'Bombardier Global 7000',
            'harga' => '750000000',
            'nomorbarang' => '15',
            'category_id' => '6'
        ]);

        \App\Models\Barang::create([
            'name' => 'Gulfstream G500',
            'harga' => '400000000',
            'nomorbarang' => '10',
            'category_id' => '6'

        ]);

        \App\Models\Barang::create([
            'name' => 'Gulfstream G650ER',
            'harga' => '400000000',
            'nomorbarang' => '17',
            'category_id' => '6'

        ]);

        \App\Models\Barang::create([
            'name' => 'Boeing 777X BBJ',
            'harga' => '900000000',
            'nomorbarang' => '1',
            'category_id' => '6'

        ]);

        \App\Models\Barang::create([
            'name' => 'Symphony of the Seas',
            'harga' => '1000000000',
            'nomorbarang' => '2',
            'category_id' => '7'

        ]);
    }
}