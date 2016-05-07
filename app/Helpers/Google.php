<?php namespace App\Helpers;

class Google{

    public static function maps($id){
        
        $map = Maps::find($id);
        
        $config['center'] = $map->center; //'-23.6744358, -70.4094682';
        $config['zoom'] = '17';
        \Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '-23.6744358, -70.4094682';
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

        return view('gmaps/gmaps', compact('map'));
    }
}
