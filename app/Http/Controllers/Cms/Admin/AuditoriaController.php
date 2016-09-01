<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Auditoria;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuditoriaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auditoria = request()->all();
        Auditoria::create($auditoria);
    }
}
