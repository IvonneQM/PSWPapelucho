<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(JornadaTableSeeder::class);
        $this->call(NivelTableSeeder::class);
        $this->call(JardinTableSeeder::class);
        $this->call(NoticiaTableSeeder::class);

        Model::reguard();
    }
}
