<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LasColoniasController extends Controller {

	public function index()
	{
		return view('papelucho-las-colonias');
	}

	public function send(Request $request)
	{
		//guarda el valor de los campos enviados desde el form en un array
		$data = $request->all();

		//se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
		\Mail::send('mails.content', $data, function($message) use ($request)
		{
			//remitente
			$message->from($request->name, $request->email, $request->phone);

			//asunto
			$message->subject($request->subject);

			//receptor
			$message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

		});
		return ("Enviado");
	}
}
