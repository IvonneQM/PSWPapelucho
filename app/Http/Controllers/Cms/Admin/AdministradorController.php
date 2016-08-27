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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $administradores = User::fullName($request->get('full_name'))->where('role','=','admin')->orderBy('id', 'DESC')->paginate();
        return view('cms.admin.administradores.lista',compact('administradores'));
    }

    /*public function findApoderado(Route $route)
    {
        this->user= User::findOrFail($route>getParameter('users'))
    }*/

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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
