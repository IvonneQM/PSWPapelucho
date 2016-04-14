<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;


use App\Archivo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\File;


class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.admin.archivos.dropzone');

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
    public function store(Request $request)
    {
        $tipo = 'img';
        $dir = public_path().'/uploads/';
        if($tipo == 'img'){
            $dir = public_path().'/uploads/imagenes/';
        }

        $files = $request->file('file');

        foreach($files as $file){
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();


            $archivo = new Archivo();
            $archivo->fileName = $fileName;
            $archivo->url = $dir;
            $archivo->size = $fileSize;
            $archivo->type = 'imagen';

            if ($file->move($dir, $fileName)){
                $archivo->save();
            }
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
