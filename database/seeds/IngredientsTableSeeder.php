<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::truncate();

        for ($i = 0; $i < 50; $i++) {
            Ingredient::create([
                'name' => 'ingredient'.$i,
                'amount' => rand(0, 55)
            ]);
        }
    }
}
