<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => 'inger',
            'full_name' => 'Inger Garrido',
            'email' => 'inger_mayelin@hotmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
        ));

        factory(App\User::class,10)->create();
    }
}