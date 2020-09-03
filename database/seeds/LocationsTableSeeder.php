<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5;$i++) {
            \App\Location::create([
                'country' => 'Lorem ipsum dolor sit amet '.$i,
                'providence' => 'Lorem ipsum '.$i,
            ]);
        }
    }
}
