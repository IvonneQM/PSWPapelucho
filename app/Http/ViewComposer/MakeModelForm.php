<?php

namespace App\Http\ViewComposer;


use App\Galeria;
use App\Jardin;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;


class MakeModelForm
{

    public function compose(View $view)
    {
        $makeForm = Request::only('galeria_id', 'jardin_id');

        $jardines = Jardin::orderBy('name', 'ASC')
            ->lists('name', 'id')
            ->toArray();

        $galerias = array();

        if ($makeForm['jardin_id'] != null) {

            $galerias = Galeria::where('jardin_id', $makeForm['jardin_id'])
                ->orderBy('updated_at', 'DESC')
                ->lists('name', 'id')
                ->toArray();
        }
        $view->with(compact('makeForm', 'galerias', 'jardines'));
    }



}