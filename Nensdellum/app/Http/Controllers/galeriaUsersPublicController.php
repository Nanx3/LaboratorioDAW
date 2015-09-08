<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Contenido;
use NensdeLlum\RedesSociales;
use NensdeLlum\Contacto;

class galeriaUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    $galeriaItems= Contenido::select('id','Titulo','Descripcion','URLImagen','Tipo')
        ->where('Tipo','Imagenes')
        ->orWhere('Tipo','Videos')
        ->orWhere('Tipo','Testimonios')
        ->paginate(16);


    $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
    $ContactoT= Contacto::where('id',1)->value('Telefono');


        return view('layoutGaleria')->with([
            'galeriaItems'=>$galeriaItems,
            'redessociales'=>$redessociales,
            'ContactoT'=>$ContactoT
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }





    public function buscarBuscador(Request $request)
    {
        //
        //




        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::value('Telefono');
        $resultadoBusqueda= Contenido::multimedia($request->get('buscador'))->orderBy('id','ASC')->paginate(16);




        return view ('layoutGaleria')->with([


            'galeriaItems'=>$resultadoBusqueda,
            'redessociales'=>$redessociales,
            'ContactoT'=>$ContactoT
        ]);


    }

}
