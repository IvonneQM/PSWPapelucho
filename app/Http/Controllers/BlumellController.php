<?php namespace App\Http\Controllers;

use App\Archivo;
use App\Galeria;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlumellController extends Controller {

	public function index()
	{
		$galerias = Galeria::orderBy('id', 'DESC')->get();
		return view('papelucho-blumell', compact('galerias', 'archivos'));
	}

	public function archivosGaleria(Request $request)
	{
		$busquedaGaleria = Galeria::find($request->get('galeria'));

		return view('galeria-blumell', compact('busquedaGaleria'));
	}
}
