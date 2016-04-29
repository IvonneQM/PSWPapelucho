<?php

namespace App\Http\Controllers\Cms\Admin;

use App\Http\Requests\CreateNoticiaRequest;
use Illuminate\Http\Request;
use App\Noticia;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id','DESC')->paginate();
        return view('cms.admin.noticias.lista',compact('noticias'));
    }

    public function mostrarNoticias()
    {
        $noticias = Noticia::orderBy('id','DESC')->paginate(2);
        return view('home',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateNoticiaRquest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateNoticiaRquest $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateNoticiaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNoticiaRequest $request)
    {
        if($request->ajax()){
            Noticia::create($request->all());
            return response()->json([]);
        }
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
    public function edit(Request $request, $id)
    {
        //
        $noticia = Noticia::find($id);
        if($request->ajax()){
            return response()->json($noticia);
        }
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
        $noticia = Noticia::find($id);
        $noticia->update($request->all());
        if($request->ajax()){
            return response()->json($noticia);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $noticia = \App\Noticia::find($id);
        $noticia->delete();
        if($request->ajax()){
            return response()->json([
                'id' => \App\Noticia::find($id),
            ]);
        }
    }
}
