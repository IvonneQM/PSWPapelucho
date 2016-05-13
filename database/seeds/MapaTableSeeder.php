<?php

use Illuminate\Database\Seeder;

class MapaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Mapa::create([
            'zoom' => 17,
            'latitud' => -23.6744358,
            'longitud' => -70.4094682
        ]);


        \App\Mapa::create([
            'zoom' => 17,
            'latitud' => -23.6700109,
            'longitud' => -70.4064002
        ]);
    }
}
