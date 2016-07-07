<?php
namespace App\Http\Controllers;

use App\Archivo;
use App\Galeria;
use App\Http\Requests\SendMailRequest;
use App\Jardin;
use App\Http\Requests;

use Illuminate\Http\Request;

class BlumellController extends Controller {

	public function index()
	{
		$galerias = null; //Galeria::orderBy('id', 'DESC')->get();
		return view('papelucho-blumell', compact('galerias'));
	}

    public function send(SendMailRequest $request)
    {
        if ($request->ajax()) {

            //guarda el valor de los campos enviados desde el form en un array
            $data = $request->all();

            //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
            \Mail::send('mails.contact', $data, function ($message) use ($request) {
                //remitente
                $message->from($request->email, $request->name, $request->phone);


                //asunto
                $message->subject($request->msj);

                //receptor
                $message->to(env('BLUMELL_CONTACT_MAIL'),env('BLUMELL_CONTACT_NAME'));

            });

            return ($data);
        };
    }
}
