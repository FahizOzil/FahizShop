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
        // User::create([
        //     'full_name' => 'fahiz ozil',
        //     'username' => 'fahizozil',
        //     'email' => 'fahizozil17@gmail.com',
        //     'phone_number' => '03021203890',
        //     'password' => bcrypt('fahiz123'),
        //     'address' => 'haji shah ali goth sharafi',
        //     'status' => 'active',
        //     'role' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Categorie::factory()->create();
        // sub_categorie::factory(100)->create();
        // Product::factory(10)->create();

    }


}


