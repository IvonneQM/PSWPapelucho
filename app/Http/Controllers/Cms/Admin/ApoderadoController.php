<?php

namespace App\Http\Controllers\Cms\Admin;
use GuzzleHttp\Subscriber\Redirect;

use Validator;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ApoderadoController extends Controller
{
    /**

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $apoderados = \App\User::paginate();
        return view('cms.admin.apoderados.apoderados',compact('apoderados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rut' => 'required|max:12',
            'full_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:10',
            'role' => 'max:12',
        ]);
    }
    public function create(Request $request)
    {
        $apoderado = new User($request->all());
        $apoderado->role = 'apoderado';
        $apoderado->save();
        \Session::flash('flash_message','Office successfully added.');
      // return view('cms.admin.apoderados.apoderados');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if($request->ajax()){
            $apoderado = new User($request->all());
            $apoderado->role = 'apoderado';
            $apoderado->save();

            return response()->json([]);

        }

      /*  $apoderado = new User($request->all());
        $apoderado->role = 'apoderado';
        $apoderado->save();
        //$this->create($request->all());*/


       /* $apoderado = new User($request->all());
        $apoderado->role = 'apoderado';
        $apoderado->save();

        return redirect()->back();
       */
    }


   /* public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->create($request->all());

        return response()->json();
    }
   */

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
       \App\User::create([
                'rut' => $request['rut'],
                'full_name' => $request['full_name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'role' => $request['role']
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
