<?php

use Illuminate\Database\Seeder;

class TravellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Travelling::class, 5 )->create();
    }
}
