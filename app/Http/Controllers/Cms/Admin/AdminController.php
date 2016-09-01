<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Auditoria;
use App\Galeria;
use App\Noticia;
use App\Parvulo;
use App\User;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $apoderados = User::where('role','=','apoderado')->get();
        $noticias = Noticia::where('publish','=','si')->get();
        $parvulos = Parvulo::get();
        $galerias = Galeria::where('publish','=','si')->get();
        return view('cms.admin.administrador',compact('galerias','apoderados','noticias','parvulos'));
    }

    public function listAuditoria(){
        $auditorias = Auditoria::orderBy('created_at','DESC')->paginate(20);
        return view('cms.admin.right-side' ,compact('auditorias'));
    }

}
