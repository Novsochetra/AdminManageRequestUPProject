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
        factory(Priority::class, 3)->create();
    }
}
