<?php
use Illuminate\Database\Seeder;

class ApoderadosTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'username' => 'inger',
            'password' => \Hash::make('inger')
        ));
    }
}