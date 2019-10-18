<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Status::class, 3)->create();

        Status::create([
            "name" => "Open",
            "color" => "#000"
        ]);

        Status::create([
            "name" => "Doing",
            "color" => "#000"
        ]);

        Status::create([
            "name" => "Resolved",
            "color" => "#000"
        ]);

        Status::create([
            "name" => "Closed",
            "color" => "#000"
        ]);

    }
}
