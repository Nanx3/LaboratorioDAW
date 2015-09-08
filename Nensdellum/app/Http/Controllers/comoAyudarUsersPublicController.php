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

class comoAyudarUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $MensajeComoAyudar = Mensajes::where('Tipo','ComoAyudar')->value('Texto');
        $MensajeEfectivo = Mensajes::where('Tipo','Efectivo')->value('Texto');
        $MensajeVoluntariado = Mensajes::where('Tipo','Voluntariado')->value('Texto');
        $MensajeDifundiryAsistir = Mensajes::where('Tipo','DifundiryAsistir')->value('Texto');
        $ImagenDonadores = Contenido::select('URLImagen')->where('Tipo','Donadores')->get();
        $MensajeDonadores =  Mensajes::where('Tipo','Donadores')->value('Texto');


        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::where('id',1)->value('Telefono');

        return view ('layoutComoAyudar')->with([

            'MensajeComoAyudar' => $MensajeComoAyudar,
            'MensajeVoluntariado' => $MensajeVoluntariado,
            'MensajeEfectivo' => $MensajeEfectivo,
            'MensajeDifundiryAsistir' => $MensajeDifundiryAsistir,
            'ImagenDonadores' => $ImagenDonadores,
            'MensajeDonadores' => $MensajeDonadores,
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
}
