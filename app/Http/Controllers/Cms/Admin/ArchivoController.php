<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Galeria;
use App\Jardin;
use App\Nivel;
use App\Parvulo;
use Illuminate\Http\Request;

use App\Archivo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Pagination\LengthAwarePaginator;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = Archivo::orderBy('id', 'DESC');
        $galerias=Galeria::doesntHave('archivos')->get();
        $jardines=Jardin::doesntHave('archivos')->get();
        $niveles=Nivel::doesntHave('archivos')->get();
        $parvulos=Parvulo::doesntHave('archivos')->get();
        return view('cms.admin.archivos.list', compact('archivos','galerias', 'jardines', 'niveles', 'parvulos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $dir = public_path().'/uploads/';

        $files = $request->file('file');
        $archivo = new Archivo();
        foreach($files as $file){

            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();

            $archivo->fileName = $fileName;
            $archivo->url = $dir;
            $archivo->size = $fileSize;

            if ($file->move($dir, $fileName)){
                $archivo->save();
            }
        }

        $methods=explode('|',$request->input('type'));

        foreach ($methods as $model){
            if(empty($request->input($model))) continue;
            if($archivo->exists) $archivo->{$model}()->attach($request->input($model));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::FineOrFail($id);
        if($file->save())return Response::json('ok',200);
        else return Response::json('error',500);
    }
}
