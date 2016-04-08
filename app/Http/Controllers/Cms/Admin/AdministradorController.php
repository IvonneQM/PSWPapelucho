<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\CreateUserRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $administradores = \App\User::fullName($request->get('full_name'))->where('role','=','admin')->orderBy('id', 'DESC')->paginate();
        return view('cms.admin.administradores.lista',compact('administradores'));
    }



    /*public function findApoderado(Route $route)
    {
        this->user= User::findOrFail($route>getParameter('users'))
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(CreateUserRequest $request)
    {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request){

        if($request->ajax()){

            $administrador = new \App\User($request->all());
            \App\User::create($request->all());
            return response()->json([]);
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
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $administrador = \App\User::find($id);
        $administrador->delete();
        if($request->ajax()){
            return response()->json([
                'id' => \App\User::find($id),
            ]);
        }
    }
}
