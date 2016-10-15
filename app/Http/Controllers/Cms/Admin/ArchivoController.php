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
        $type = $request->get('type');
        if (!empty($type))
        {
            $archivos = Archivo::types($type)->orderBy('id', 'DESC')->paginate(8);
            $archivos->setPath('archivos/files');
            return view('cms.admin.archivos.partials.thumbnails', compact('archivos','type'));
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
        $files = $request->file('file'); //
        $dir = public_path() . '/uploads/';
        $methods = explode('-', $request->input('type'));
        foreach ($files as $file) {
            $archivo = new Archivo();
            $fileOriginalName = $file->getClientOriginalName();
            $fileOriginalName = $request->sanitize_cadena($fileOriginalName);
            $fileSize = $file->getClientSize();
            $fileType = strtolower($file->getClientOriginalExtension());
            $fileOnlyName = basename($fileOriginalName, '.' . $fileType);

            //agregarle un numero cuando imagen se llame igual//
            $i = 1;
            $fileFullName = $fileOriginalName;
            while (\File::exists($dir . $fileOriginalName)) {
                $fileOriginalName = $fileOnlyName . '_' . $i;
                $fileOriginalName = $fileOriginalName . '.' . $fileType;
                $fileFullName = $fileOriginalName;
                $i++;
            }
            //
            $archivo->fileName = $fileFullName;
            $archivo->url = 'uploads/' . $fileFullName;
            $archivo->size = $fileSize;
            $archivo->extension = $fileType;

            if( $fileType === 'jpeg' || $fileType === 'png' || $fileType === 'bmp' ){
            $file = \Image::make($file->getRealPath());
            $file->resize(1280, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
                $file->orientate();
                $file->save($archivo->url);
            }
            else{
               $file->move($dir, $fileFullName);
            }

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
            //}
        }
        event((new \App\Events\SendMail($archivo)));
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
