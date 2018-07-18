<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\ChoferVehiculo;



class DuenosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.admin.duenos.lista');
    }

    public function listAllDuenos(Request $request){
        $duenos = User::fullName($request->get('full_name'))->where('role','=','dueño')->orderBy('id', 'DESC')->paginate(20);
        return view ('cms.admin.duenos.partials.table',compact('duenos'));
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
            $dueno = User::create($request->all());
            return response()->json($dueno);

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
        $duenos = User::find($id);

        if($request->ajax()) {
            return response()->json($duenos);
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
        $duenos = User::find($id);
        $duenos->update($request->all());
        if($request->ajax()){
            return response()->json($duenos);
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
        $duenos = User::find($id);
        $duenos->delete();
        if($request->ajax()){
            return response()->json([
                'id' => User::find($id),
            ]);
        }
    }
}
