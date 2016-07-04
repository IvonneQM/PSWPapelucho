<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Galeria;
use App\Http\Requests\CreateArchivoRequest;
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
        $archivos = null;
        $galerias=Galeria::with('archivos')->get();
        $jardines=Jardin::with('archivos')->get();
        $niveles=Nivel::with('archivos')->get();
        $parvulos=Parvulo::with('archivos')->get();

        return view('cms.admin.archivos.list', compact('archivos','galerias', 'jardines', 'niveles', 'parvulos'));

    }

    public function files(Request $request)
    {
        $method = $request->get('type');
        if(
            ! empty($method)
        )
        {
            $archivos = Archivo::types($method)->orderBy('id', 'DESC')->paginate(12);
            return view('cms.admin.archivos.partials.thumbnails', compact('archivos'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateArchivoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArchivoRequest $request)
    {

        $dir = public_path() . '/uploads/';
        $files = $request->file('file');
        $methods = explode('-', $request->input('type'));

        foreach ($files as $file) {
            $archivo = new Archivo();

            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();
            $fileType = $file->guessExtension();

            $archivo->fileName = $fileName;
            $archivo->url = 'uploads/' . $fileName;
            $archivo->size = $fileSize;
            $archivo->extension = $fileType;

            if ($file->move($dir, $fileName)) {
                $archivo->save();

                $archivo->type = $request->input('type');

                foreach ((array)$methods as $model) {
                    if (empty($request->input($model))) continue;
                    if (
                        $archivo->exists &&
                        !in_array($model, ['general'])
                    ) {
                        $archivo->{$model}()->attach($request->input($model));
                    }
                }
            }
        }

        event((new \App\Events\SendMail($archivo)));
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param CreateArchivoRequest $request
     * @return \Illuminate\Http\Response
     */

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
