<?php namespace App\Helpers;

use App\Mapa;

class Google{

    public static function maps($id){
        
        $map = Mapa::find($id);
        $coordenadas = $map->latitud + "," + $map->longitud;
        
        $config['zoom'] = $map->zoom;
        \Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = $coordenadas;
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

        return view('gmaps/gmaps', compact('map'));
    }
}
