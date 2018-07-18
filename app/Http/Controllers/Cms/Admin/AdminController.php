<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Auditoria;
use App\Vehiculo;
use App\User;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
		$duenos = User::where('role','=','dueno')->get();
        $choferes = User::where('role','=','chofer')->get();
        $directivas = User::where('role','=','directiva')->get();

        $vehiculos = Vehiculo::get();
        return view('cms.admin.administrador',compact('duenos','noticias','vehiculos','choferes','directivas'));
    }

    public function listAuditoria(){
        $auditorias = Auditoria::orderBy('created_at','DESC')->paginate(20);
        return view('cms.admin.right-side' ,compact('auditorias'));
    }

}
