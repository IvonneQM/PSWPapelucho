<?php

namespace App\Http\Controllers\Cms\Apoderados;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApoderadoController extends Controller
{
    public function index()
    {
        return view('cms.apoderados.apoderado');
    }

}
