<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = Customer::create([
            'full_name' => 'Fahiz',
            'username' => 'fahizozil',
            'email' => 'fahizozil17@gmail.com',
            'address' => 'Haji shah ali goth sharafi korangi area karachi pakistan',
            'phone_number' => '03021203890',
            'password' => bcrypt('fahiz123'),
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
