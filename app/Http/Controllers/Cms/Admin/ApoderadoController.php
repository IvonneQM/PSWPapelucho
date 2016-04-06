<?php

namespace App\Http\Controllers\Cms\Admin;
use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApoderadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $apoderados = \App\User::fullName($request->get('full_name'))->where('role','=','apoderado')->orderBy('id', 'DESC')->paginate();
        return view('cms.admin.apoderados.lista', compact('apoderados'));
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
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request){
        if($request->ajax()){
            $apoderado = new User($request->all());
            $apoderado->role = 'apoderado';
            User::create($request->all());
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apoderado = User::findOrFail($id);
        return view('cms.admin.apoderados.edit',compact('apoderado'));
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
        alert("HOLA");
        $apoderado = User::findOrFail($id);

        $apoderado->fill($request->all());
        $apoderado->save();
        if($request->ajax()){
            return response()->json([

            ]);
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
        $apoderado = User::find($id);
        $apoderado->delete();
       if($request->ajax()){
                return response()->json([
                    'id' => User::find($id),
                ]);
            }
        }

}
