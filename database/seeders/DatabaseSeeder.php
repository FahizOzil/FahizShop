<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\sub_categorie;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'full_name' => 'liza',
            'username' => 'lizaozil',
            'email' => 'lizaozil17@gmail.com',
            'phone_number' => '03021203890',
            'password' => 'lizaa123',
            'address' => 'haji shah ali goth sharafi',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Categorie::factory(10)->create();
        sub_categorie::factory(100)->create();
        // Product::factory(10)->create();

    }


}


