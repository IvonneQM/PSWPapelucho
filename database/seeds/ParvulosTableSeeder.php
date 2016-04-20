<?php

use Illuminate\Database\Seeder;

class ParvulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Parvulo::class,10)->create();
    }
}
