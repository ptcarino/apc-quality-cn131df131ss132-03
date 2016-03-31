<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(
            array('name' => 'National Capital Region'),
            array('name' => 'Ilocos Region'),
            array('name' => 'Cordillera Administrative Region'),
            array('name' => 'Cagayan Valley Region'),
            array('name' => 'Central Luzon'),
            array('name' => 'CALABARZON'),
            array('name' => 'MIMAROPA'),
            array('name' => 'Bicol Region'),
            array('name' => 'Western Visayas'),
            array('name' => 'Negros Island Region'),
            array('name' => 'Central Visayas'),
            array('name' => 'Eastern Visayas'),
            array('name' => 'Zamboanga Peninsula'),
            array('name' => 'Northern Mindanao'),
            array('name' => 'Caraga'),
            array('name' => 'Davao Region'),
            array('name' => 'SOCCSKSARGEN'),
            array('name' => 'Autonomous Region in Muslim Mindanao')
        );
    }
}
