<?php

namespace Database\Seeders;

use App\Models\Customer as ModelsCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       for($i = 1; $i <= 10; $i++) {
        $faker = Faker::create();

        $customer_info = new ModelsCustomer();

        $customer_info->name = $faker->name;
        $customer_info->phone = $faker->phoneNumber;
        $customer_info->email = $faker->email;

        $customer_info->save();
       }
    }
}
