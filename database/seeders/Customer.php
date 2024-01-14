<?php

namespace Database\Seeders;

use App\Models\Customer as ModelsCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $customer_info = new ModelsCustomer();

       $customer_info->name = "kashfia";
       $customer_info->phone = "055";
       $customer_info->email = "kashfia@gmail.com";

       $customer_info->save();
    }
}
