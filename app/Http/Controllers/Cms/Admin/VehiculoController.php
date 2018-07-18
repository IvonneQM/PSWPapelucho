<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateVehiculoRequest;
use App\Http\Requests\createChoferVehiculo;

use App\User;
use App\Vehiculo;
use App\ChoferVehiculo;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Request $request)
    {
        $choferes = User::get()->where('role','chofer');
        $duenos = User::find($request->get('user'));

        $vehiculos = Vehiculo::dueno($request->get('user'))->orderBy('id', 'DESC')->paginate();

        return view('cms.admin.vehiculos.lista',compact('duenos', 'vehiculos','choferes','idvehiculos'));
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

    public function storeAsociacion(createChoferVehiculo $request)
    {
        return ('asociacion');
        if($request->ajax()){
            $asociacion = ChoferVehiculo::create($request->all());
            return response()->json($asociacion);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVehiculoRequest $request)
    {
        if ($request->ajax()) {
            $vehiculo = Vehiculo::create($request->all());
            return response()->json($vehiculo);
        }
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
	public function edit(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);

        if ($request->ajax()) {
            return response()->json($vehiculo);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(CreateVehiculoRequest $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->update($request->all());
        if ($request->ajax()) {
            return response()->json($vehiculo);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	function destroy($id, Request $request)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        if ($request->ajax()) {
            return response()->json([
                'id' => Vehiculo::find($id),
            ]);
        }
    }
}
