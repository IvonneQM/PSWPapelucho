<?php namespace App\Http\Controllers;

use App\Archivo;
use App\Galeria;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		$galerias = Galeria::with('jardin')->with('archivos')
            ->where('jardin_id',2)
            ->orderBy('updated_at', 'DESC')
            ->get();

		return view('papelucho-blumell', compact('galerias'));

	}


}
