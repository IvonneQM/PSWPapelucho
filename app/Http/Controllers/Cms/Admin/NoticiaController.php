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
        return view('cms.admin.noticias.lista');
    }


    public function listNoticia(Request $request){
        $noticias = Noticia::orderBy('id','DESC')->paginate(10);
        return view('cms.admin.noticias.partials.table',compact('noticias'));
    }

    /* MOSTRAR NOTICIA EN HOME*/
    public function mostrarNoticias()
    {
        $noticias = Noticia::where('publish','si')->orderBy('id','DESC')->paginate(2);
        return view('home',compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateNoticiaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateNoticiaRequest $request)
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
            $noticias = Noticia::create($request->sanitize());
            return response()->json($noticias);
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
     * @param Request $request
     * @param  int $id
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
     * @param CreateNoticiaRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateNoticiaRequest $request, $id)
    {
        //
        $noticia = Noticia::find($id);
        $noticia->update($request->sanitize());
        if($request->ajax()){
            return response()->json($noticia);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        if($request->ajax()){
            return response()->json([
                'id' => \App\Noticia::find($id),
            ]);
        }
    }
}
