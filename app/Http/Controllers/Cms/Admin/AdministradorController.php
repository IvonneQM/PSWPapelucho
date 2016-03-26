<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
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

        $administradores = \App\User::where('role','=','admin')->orderBy('id', 'DESC')->paginate();
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rut' => 'required|max:12',
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'role' => 'max:12',
        ]);
    }
    public function create(Request $request)
    {
        $administrador = new \App\User($request->all());
        $administrador->role = 'admin';

        $administrador->save();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if($request->ajax()){
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
