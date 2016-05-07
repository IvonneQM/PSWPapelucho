<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GmapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    public function getBlumellMap(){
        $config['center'] = '-23.6744358, -70.4094682';
        $config['zoom'] = '17';
        \Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '-23.6744358, -70.4094682';
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

        return view('gmaps/gmaps', compact('map'));
        \Gmaps::initialize($config);
    }

    public function getLasColoniasMap(){
        $config['center'] = '-23.6700109, -70.4064002';
        $config['zoom'] = '17';
        \Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '-23.6700109, -70.4064002';
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();

        return view('gmaps/gmaps', compact('map'));
        \Gmaps::initialize($config);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
