<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => '12345',
            'full_name' => 'Inger Garrido',
            'email' => 'inger.mayelin@gmail.com',
            'password' => bcrypt('inger'),
            'role' => 'admin',
        ));

        factory(App\User::class,10)->create();
    }
}