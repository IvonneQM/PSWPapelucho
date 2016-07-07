<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SendMailRequest;
use Styde\Html\Facades\Alert;
use Illuminate\Http\Request;

class LasColoniasController extends Controller {

	public function index()
	{
		//$jardines = Jardin::with('galerias')->where('name', 'Las colonias');
		return view('papelucho-las-colonias');
	}

	public function send(SendMailRequest $request)
	{
        if($request->ajax()) {

            //guarda el valor de los campos enviados desde el form en un array
            $data = $request->all();
            //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
            \Mail::send('mails.contact', $data, function ($message) use ($request) {
                //remitente
                $message->from($request->email, $request->name, $request->phone);


                //asunto
                $message->subject($request->msj);

                //receptor
                $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

            });

            return ($data);
        };
	}
}
