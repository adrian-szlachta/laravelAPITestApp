<?php
use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all records from role table
        Status::truncate();

        for ($i = 0; $i < 50; $i++) {
            Status::create([
                'name' => 'status'.$i
            ]);
        }
    }
}
