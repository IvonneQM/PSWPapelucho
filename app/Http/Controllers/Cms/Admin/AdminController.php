<?php

namespace App\Http\Controllers\Cms\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('cms.admin.administrador');
    }
}
