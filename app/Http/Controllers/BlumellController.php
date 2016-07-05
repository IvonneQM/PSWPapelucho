<?php
namespace App\Http\Controllers;

use App\Archivo;
use App\Galeria;
use App\Jardin;
use App\Http\Requests;

use Illuminate\Http\Request;

class BlumellController extends Controller {

	public function index()
	{
		$galerias = null; //Galeria::orderBy('id', 'DESC')->get();
		return view('papelucho-blumell', compact('galerias'));
	}

	public function galeriasBlummel()
	{
	}

	public function archivosGaleria(Request $request)
	{

		$galerias = Galeria::whereHas('archivos', function ($q) {
            $q->where('jardin_id',2);
            $q->where('publish','Si');
        })->get();
        return view('papelucho-blumell', compact('galerias'));

	}


}
