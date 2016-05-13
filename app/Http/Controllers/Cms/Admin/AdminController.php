<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Auditoria;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $auditorias = Auditoria::get();
        return view('cms.admin.administrador', compact('auditorias'));
    }
}
