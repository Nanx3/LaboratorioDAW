<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;
use NensdeLlum\RedesSociales;
use NensdeLlum\User;
use NensdeLlum\Contacto;
use NensdeLlum\Contenido;

class IndexUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $imagenesBienvenidos = Contenido::where('Tipo','Bienvenidos')->value('URLImagen');

        $bienvenidos= Mensajes::where('Tipo','Bienvenidos')->value('Texto');

        $logros= Contenido::select('id','Titulo','Descripcion','URLImagen')->where('Tipo','Logros')->get();

        $notificaciones =Contenido::select('id','Titulo','Descripcion','URLImagen','updated_at')->where('Tipo','Notificaciones')->orderBy('updated_at','DESC')->get();

        $colaboradores= Listas::select('id','Titulo','Descripcion')->where('Tipo','Colaboradores')->get();


        $Imagen1 = Contenido::where('Tipo','Imagen1')->value('URLImagen');
        $Imagen2 = Contenido::where('Tipo','Imagen2')->value('URLImagen');
        $Imagen3 = Contenido::where('Tipo','Imagen3')->value('URLImagen');

        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::value('Telefono');



        return view ('layoutindex')->with([
            'bienvenidos'=>$bienvenidos,
            'logros'=>$logros,
            'notificaciones'=>$notificaciones,
            'colaboradores'=>$colaboradores,
            'imagenesBienvenidos'=>$imagenesBienvenidos,
            'redessociales'=>$redessociales,
            'ContactoT'=>$ContactoT,
            'Imagen1' => $Imagen1,
            'Imagen2' => $Imagen2,
            'Imagen3' => $Imagen3
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


        $notificacionItem = Contenido::findOrFail($id);


        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::where('id',1)->value('Telefono');



        return view('layoutNotificacionesItem')->with([

            'Notificacion'=>$notificacionItem,
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
