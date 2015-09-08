<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;
use NensdeLlum\User;
use NensdeLlum\Contacto;
use NensdeLlum\Contenido;
use NensdeLlum\RedesSociales;

class boletinUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        $ImagenBoletin= Mensajes::where('Tipo','Bienvenidos')->value('Texto');

        $boletines = Contenido::where('Tipo','Boletin')->orderBy('updated_at','DESC')->paginate(5);

        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::value('Telefono');


        return view ('layoutBoletin')->with([
        'ImagenBoletin' => $ImagenBoletin,
         'boletines'=>$boletines,
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


        $resultadoBusqueda= Contenido::titulo($request->get('buscador'))->orderBy('updated_at','DESC')->paginate(5);
        $ImagenBoletin= Mensajes::where('Tipo','Bienvenidos')->value('Texto');

        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::value('Telefono');

        return view ('layoutBoletin')->with([
            'ImagenBoletin' => $ImagenBoletin,
            'ContactoT'=>$ContactoT,
            'redessociales'=>$redessociales,
            'boletines'=>$resultadoBusqueda
        ]);

    }


}
