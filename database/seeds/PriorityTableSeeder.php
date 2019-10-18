<?php

use Illuminate\Database\Seeder;
use App\Priority;

class PriorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Priority::class, 3)->create();

        Priority::create([
            "name" => "Urgent",
            "color" => "#000"
        ]);

        Priority::create([
            "name" => "Low",
            "color" => "#000"
        ]);

        Priority::create([
            "name" => "Normal",
            "color" => "#000"
        ]);

        Priority::create([
            "name" => "Hight",
            "color" => "#000"
        ]);
    }
}
