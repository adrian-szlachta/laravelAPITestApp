<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        for ($i = 0; $i < 50; $i++) {
            Category::create([
                'name' => 'category'.$i
            ]);
        }
    }
}
