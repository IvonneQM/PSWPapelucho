<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class DirectivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.admin.directiva.lista');
    }
    public function listAllDirectiva(Request $request){
        $directivas = User::fullName($request->get('full_name'))->where('role','=','directiva')->orderBy('id', 'DESC')->paginate(20);
        return view ('cms.admin.directiva.partials.table',compact('directivas'));
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
    public function store( CreateUserRequest $request){

        if($request->ajax()){
            $directiva = User::create($request->all());
            return response()->json($directiva);

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
        $directiva = User::find($id);

        if($request->ajax()) {
            return response()->json($directiva);
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
        $directiva = User::find($id);
        $directiva->update($request->all());
        if($request->ajax()){
            return response()->json($directiva);
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
        $directiva = User::find($id);
        $directiva->delete();
        if($request->ajax()){
            return response()->json([
                'id' => User::find($id),
            ]);
        }
    }
}
