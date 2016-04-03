<?php

use Illuminate\Database\Seeder;

class JardinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Jardin::create([
            'name' => 'Blumell'
        ]);

        \App\Jardin::create([
            'name' => 'Las Colonias'
        ]);

    }
}
