<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Nivel;
use App\Jornada;
use App\Jardin;
use App\Parvulo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParvuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $niveles=Nivel::with('parvulos')->get();
        $jornadas=Jornada::with('parvulos')->get();
        $jardines=Jardin::with('parvulos')->get();
        $apoderado = User::find($request->get('user'));
        $parvulos = Parvulo::apoderado($request->get('user'))->paginate();
        return view('cms.admin.parvulos.lista', compact('parvulos','apoderado','niveles','jornadas','jardines'));

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rut' => 'required|max:12',
            'full_name' => 'required|max:255',
        ]);
    }

    public function listJornadas(Request $request){
        $jornadas= Jornada::jornadas($request->get('jornada'))->paginate();
        return $jornadas;
    }

    public function getJornadas(Request $request, $id){
        if($request->ajax()){
            $jornadas= Jornada::jornadas();
            return response()->json($jornadas);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->ajax()){
            $parvulo = Parvulo::create($request->all());
            return response()->json($parvulo);
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
        $parvulo = Parvulo::find($id);

        if($request->ajax()) {
            return response()->json($parvulo);
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
        $parvulo = Parvulo::find($id);
        $parvulo->update($request->all());
        if($request->ajax()){
            return response()->json($parvulo);
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
        $parvulos = Parvulo::find($id);
        $parvulos->delete();
        if($request->ajax()){
            return response()->json([
                'id' => Parvulo::find($id),
            ]);
        }


    }
}
