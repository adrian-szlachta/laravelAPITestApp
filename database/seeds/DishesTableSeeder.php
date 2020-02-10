<?php

use Illuminate\Database\Seeder;
use App\Dish;
class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::truncate();

        for ($i = 0; $i < 50; $i++) {
            Dish::create([
                'name' => 'dish'.$i,
                'id_category' => rand(0, 50)
            ]);
        }
    }
}
