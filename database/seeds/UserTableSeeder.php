<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'rut' => '11.111.111-1',
            'full_name' => 'Administrador',
            'email' => '',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ));

        factory(App\User::class,10)->create();
    }
}