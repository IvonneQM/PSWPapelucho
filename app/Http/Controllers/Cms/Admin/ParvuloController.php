<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Jornada;
use App\Parvulo;

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

            $parvulos = Parvulo::user($request->get('user'))->paginate();
            return view('cms.admin.parvulos.lista', compact('parvulos'));

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
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $parvulos = new Parvulo($request->all());
        $parvulos->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if($request->ajax()){
            Parvulo::create($request->all());
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
        $parvulo = User::findOrFail($id);
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
