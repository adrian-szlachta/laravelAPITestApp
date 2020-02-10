<?php

use Illuminate\Database\Seeder;
use \Faker\Factory;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all records from role table
        Role::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Role::create([
                'name' => $faker->name
            ]);
        }
    }
}
