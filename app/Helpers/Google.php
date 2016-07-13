<?php namespace App\Helpers;

use App\Mapa;
use Gmaps;

class Google{

    public static function maps($id){
        
        $map = Mapa::findOrFail($id);
        $coordenadas = $map->latitud .  "," . $map->longitud;
        //dd($coordenadas);

        $config['center'] = $coordenadas;
        $config['zoom'] = $map->zoom;
        Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = $coordenadas;
        Gmaps::add_marker($marker);
        $map = Gmaps::create_map();
        return view('gmaps/gmaps', compact('map'));
    }
}
