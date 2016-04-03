<?php

use Illuminate\Database\Seeder;

class JornadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Jornada::create([
           'name' => 'Mañana'
        ]);

        \App\Jornada::create([
           'name' => 'Tarde'
        ]);

        \App\Jornada::create([
           'name' => 'Completa'
        ]);
    }
}
