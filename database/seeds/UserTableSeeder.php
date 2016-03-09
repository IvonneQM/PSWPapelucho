<?php
use Illuminate\Database\Seeder;

class ApoderadosTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => '17092769-9',
            'full_name' => 'Inger Garrido',
            'password' => bcrypt('inger'),
            'role' => 'admin',
        ));

        factory(App\User::class,49)->create();
    }
}