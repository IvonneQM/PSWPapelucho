<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Archivo;
use App\Auditoria;
use App\Galeria;
use App\Noticia;
use App\Parvulo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $auditorias = Auditoria::paginate(10);
        $apoderados = User::where('role','=','apoderado')->get();
        $noticias = Noticia::where('publish','=','si')->get();
        $parvulos = Parvulo::get();
        $galerias = Galeria::where('publish','=','si')->get();

        return view('cms.admin.administrador', compact('auditorias','apoderados','noticias','parvulos','galerias'));
    }
}
