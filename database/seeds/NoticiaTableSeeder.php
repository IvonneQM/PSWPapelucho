<?php

use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                \DB::table('noticias')->insert(array(
                    'title' => 'Noticia1',
                    'content' => 'LAFNAKS aksjdaks asdaksdjaksdo',
                    'publish' => 'si',

                ));

        factory(App\Noticia::class,10)->create();
    }
}
