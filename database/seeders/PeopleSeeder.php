<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i= 1; $i<= 5000; $i++) {
            $people = new People;

            $people->name = $faker->name;
            $people->email = $faker->email;

            $people->save();
        }
    }
}
