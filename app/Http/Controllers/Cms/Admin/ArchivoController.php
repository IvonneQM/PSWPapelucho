<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Galeria;
use App\Http\Requests\CreateArchivoRequest;
use App\Jardin;
use App\Nivel;
use App\Parvulo;
use Illuminate\Http\Request;
use App\Archivo;
use App\Http\Controllers\Controller;
use Image;
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
        $galerias = Galeria::with('archivos')->get();
        $jardines = Jardin::with('archivos')->get();
        $niveles = Nivel::with('archivos')->get();
        $parvulos = Parvulo::with('archivos')->get();
        return view('cms.admin.archivos.list', compact('archivos', 'galerias', 'jardines', 'niveles', 'parvulos'));
    }

    public function files(Request $request)
    {
        $method = $request->get('type');
        if (
        !empty($method)
        ) {
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
        $file = \Input::file($files);
        $img = \Image::make($file);

/*        foreach ($files as $file) {
            $archivo = new Archivo();
            //$file = Image::make($file);
*/
/*
                //$file->resize(300, 200);
                //$file->insert('public/images/close.png');
                $fileName = $file->getClientOriginalName();
                $fileName = $request->sanitize_cadena($fileName);
                $fileSize = $file->getClientSize();
                $fileType = $file->getClientOriginalExtension();


                $archivo->fileName = $fileName;
                $archivo->url = 'uploads/' . $fileName;
                $archivo->size = $fileSize;
                $archivo->extension = $fileType;


                if ($file->move($dir, $fileName)) {
                    $file->save();

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
            }*/



       // event((new \App\Events\SendMail($archivo)));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Archivo::FindOrFail($id);
        if (unlink($file->url)) {
            $file->delete();
            $file->galerias()->detach();
            $file->jardines()->detach();
            $file->niveles()->detach();
            return back();
        }
    }
}
