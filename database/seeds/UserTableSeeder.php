<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => '1709',
            'full_name' => 'Inger Garrido',
            'email' => 'inger_mayelin@hotmail.com',
            'password' => bcrypt('inger'),
            'role' => 'admin',
        ));

        factory(App\User::class,49)->create();
    }
}