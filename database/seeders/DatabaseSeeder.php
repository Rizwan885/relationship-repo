<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory as Faker;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker=Faker::create();
        foreach(range(1,10) as $val)
        {
            Student::create([
                "firstname"=>$faker->firstName,
                "lastname"=>$faker->lastName,
            ]);

        }
    }
}
