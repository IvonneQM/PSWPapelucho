<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => '1709',
            'full_name' => 'Inger Garrido',
            'password' => bcrypt('inger'),
            'role' => 'admin',
        ));

        factory(App\User::class,49)->create();
    }
}