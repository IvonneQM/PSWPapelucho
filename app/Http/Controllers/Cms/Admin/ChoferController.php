<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateUserRequest;
use App\User;
use App\Auditorias;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.admin.chofer.lista');
    }

    public function listAllChofer(Request $request){
        $choferes = User::fullName($request->get('full_name'))->where('role','=','chofer')->orderBy('id', 'DESC')->paginate(20);
        return view ('cms.admin.chofer.partials.table',compact('choferes'));
    }


    // $duenos = User::find($request->get('user'));
    //     $vehiculos = Vehiculo::dueno($request->get('user'))->orderBy('id', 'DESC')->paginate();

    //     return view('cms.admin.vehiculos.lista',compact('duenos', 'vehiculos','allvehiculos'));
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
    public function store( CreateUserRequest $request){

        if($request->ajax()){
            $chofer = User::create($request->all());
            return response()->json($chofer);

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
        $chofer = User::find($id);

        if($request->ajax()) {
            return response()->json($chofer);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $id)
    {
        $chofer = User::find($id);
        $chofer->update($request->all());
        if($request->ajax()){
            return response()->json($chofer);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $chofer = User::find($id);
        $chofer->delete();
        if($request->ajax()){
            return response()->json([
                'id' => User::find($id),
            ]);
        }
    }
}
