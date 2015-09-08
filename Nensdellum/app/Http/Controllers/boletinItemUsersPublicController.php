<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use NensdeLlum\Contenido;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;
use NensdeLlum\User;
use NensdeLlum\Contacto;
use NensdeLlum\RedesSociales;

class boletinItemUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


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
        //


        $boletinItem = Contenido::findOrFail($id);
        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::value('Telefono');


        return view('layoutBoletinItem')->with([

            'boletinItem'=>$boletinItem,
            'redessociales'=>$redessociales,
            'ContactoT'=>$ContactoT

        ]);
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
