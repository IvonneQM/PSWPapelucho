<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateGaleriaRequest;
use App\Jardin;
use Illuminate\Http\Request;
use App\Galeria;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $galerias = Galeria::orderBy('id', 'DESC')->paginate();
        $jardines = Jardin::get();
        return view('cms.admin.galerias.lista', compact('galerias','jardines'));
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
     * @param CreateGaleriaRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateGaleriaRequest $request){


        if($request->ajax()){
            $galerias = Galeria::create($request->sanitize());
            $galerias = Galeria::with('jardin')->find($galerias->id);
            return $galerias;

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
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $galeria = Galeria::find($id);
        if($request->ajax()) {
            return response()->json($galeria);
        }
    }

    /**
     * Update the specified resource in storage.
     * @param CreateGaleriaRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateGaleriaRequest $request, $id)
    {
        $galeria = Galeria::find($id);
        $galeria->update($request->sanitize());
        if($request->ajax()){
            return response()->json($galeria);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $galeria = Galeria::find($id);
        $jardin = $galeria->jardin;
        $galeria->delete();
        $galeria->archivos()->delete();
        $jardin->archivos()->detach();
        $galeria->archivos()->detach();

        if($request->ajax()){
            return response()->json([
                'id' => Galeria::find($id),
            ]);
        }
    }

}
