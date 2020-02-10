<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        for ($i = 0; $i < 50; $i++) {
            Permission::create([
                'id_role' => rand(0, 50),
                'dashboard' => rand(0, 1),
                'kitchen' => rand(0, 1),
                'settings' => rand(0, 1),
                'menu' => rand(0, 1),
                'orders' => rand(0, 1),
                'products' => rand(0, 1),
                'dishes' => rand(0, 1)
            ]);
        }
    }
}
