<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;

use App\Galeria;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $galerias = Galeria::orderBy('id', 'DESC')->paginate();
        return view('cms.admin.galerias.lista', compact('galerias'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
    }

    /**
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){

        if($request->ajax()){
            $galerias = new Galeria($request->all());
            Galeria::create($request->all());
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
    public function edit(Request $request, $id)
    {
        $galeria = Galeria::find($id);

        if($request->ajax()) {
            return response()->json($galeria);
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
        $galeria = Galeria::find($id);
        $galeria->update($request->all());
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
    public function destroy($id, Request $request)
    {
        $galeria = Galeria::find($id);
        $galeria->delete();
        if($request->ajax()){
            return response()->json([
                'id' => Galeria::find($id),
            ]);
        }
    }

}
