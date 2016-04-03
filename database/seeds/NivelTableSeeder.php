<?php

use Illuminate\Database\Seeder;

class NivelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Nivel::create([
            'name' => 'Sala Cuna Lactante Menor'
        ]);

        \App\Nivel::create([
            'name' => 'Sala Cuna Lactante Mayor'
        ]);

        \App\Nivel::create([
            'name' => 'Medio Menor'
        ]);

        \App\Nivel::create([
            'name' => 'Medio Mayor'
        ]);

        \App\Nivel::create([
            'name' => 'Transición menor'
        ]);
    }
}
