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

		$galerias = Galeria::get()->where('jardin_id',1);
        return view('papelucho-blumell', compact('galerias'));

	}


}
