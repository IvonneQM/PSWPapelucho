<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateUserRequest;
use App\User;
use App\Auditorias;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.admin.administradores.lista');
    }

    public function listAll(Request $request){
        $administradores = User::fullName($request->get('full_name'))->where('role','=','admin')->orderBy('id', 'DESC')->paginate(20);
        return view ('cms.admin.administradores.partials.table',compact('administradores'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\Response
     */


    public function create(CreateUserRequest $request)
    {

    }

    /**
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store( CreateUserRequest $request){

        if($request->ajax()){
            $administrador = User::create($request->all());
            return response()->json($administrador);
            
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
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $administrador = User::find($id);

        if($request->ajax()) {
            return response()->json($administrador);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateUserRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $id)
    {
        $administrador = User::find($id);
        $administrador->update($request->all());
        if($request->ajax()){
            return response()->json($administrador);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $administrador = User::find($id);
        $administrador->delete();
        if($request->ajax()){
            return response()->json([
                'id' => User::find($id),
            ]);
        }
    }

}
