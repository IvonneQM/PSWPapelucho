<?php
namespace App\Http\ViewComposer;

use App\Archivo;
use App\Galeria;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class MakeGaleryForm
{
    public function compose(View $view)
    {
        $makeGaleryForm = Request::only('archivo_id', 'galeria_id');

        $galerias = Galeria::whereHas('archivos', function ($q) {
            $q->where('jardin_id',2);
            $q->where('publish','Si');
        })
            ->orderBy('updated_at', 'DESC')
            ->lists('name', 'id')
            ->toArray();

        $archivos = array();

        if ($makeGaleryForm['archivo_id'] != null) {

            $archivos = Archivo::where('archivo_id', $makeGaleryForm['archivo_id'])
                ->orderBy('created_at', 'DESC')
                ->lists('url', 'id')
                ->toArray();

        }
        $view->with(compact('makeGaleryForm', 'archivos', 'galerias'));
    }

}