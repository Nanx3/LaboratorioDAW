<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\comoAyudarRequest;
use NensdeLlum\Http\Requests\MensajesRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;
use NensdeLlum\Http\Requests\redesSocialesRequest;
use NensdeLlum\Http\Requests\galeriaRequest;
use NensdeLlum\Http\Requests\SeleccionGaleriaRequest;
use NensdeLlum\Http\Requests\SeleccionRedesSocialesRequest;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;
use NensdeLlum\RedesSociales;
use NensdeLlum\User;
use NensdeLlum\Contacto;
use NensdeLlum\Contenido;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ComoAyudar extends Controller
{
    public function  __construct()
    {

        if(!Auth::check()){

            $this->middleware('auth');
        }

    }

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
        $ImgenDonadores = Contenido::select('id','URLImagen')->where('Tipo','Imagenes')->get();
        $MensajeDonadores =  Mensajes::where('Tipo','Donadores')->value('Texto');
        $RedesSociales = RedesSociales:: select('Titulo','Glyph','URLPagina');
        $RedesSocialesSeleccion = RedesSociales::select('Titulo', 'id')->get();
        $Donadores = Contenido::where('Tipo','Donadores')->get();



        return view ('admin/comoayudar')->with([

            'MensajeComoAyudar' => $MensajeComoAyudar,
            'MensajeVoluntariado' => $MensajeVoluntariado,
            'MensajeEfectivo' => $MensajeEfectivo,
            'MensajeDifundiryAsistir' => $MensajeDifundiryAsistir,
            'ImagenDonadores' => $ImgenDonadores,
            'MensajeDonadores' => $MensajeDonadores,
            'RedesSociales'  => $RedesSociales,
            'RedesSocialesSeleccion' => $RedesSocialesSeleccion,
            'Donadores' => $Donadores

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


    public function updateMensajeComoAyudar(MensajesRequest $request)
    {

        $Mensaje = Mensajes::where('Tipo','ComoAyudar')->value('id');

        $MensajeComoAyudar = Mensajes::where('id',$Mensaje)->update(array('Texto' => $request->Texto));
        Session::flash('message', 'El mensaje de Como Ayudar fue modificado');
        return redirect('admin/comoayudar');
    }

    public function updateMensajeVoluntariado(MensajesRequest $request)
    {

        $Mensaje = Mensajes::where('Tipo','Voluntariado')->value('id');

        $MensajeVoluntariado= Mensajes::where('id',$Mensaje)->update(array('Texto' => $request->Texto));
        Session::flash('message', 'El mensaje de Voluntariado fue modificado');
        return redirect('admin/comoayudar');
    }

    public function updateMensajeEfectivo(MensajesRequest $request)
    {


        $Mensaje = Mensajes::where('Tipo','Efectivo')->value('id');

        $MensajeEfectivo = Mensajes::where('id',$Mensaje)->update(array('Texto' => $request->Texto));
        Session::flash('message', 'El mensaje de Efectivo fue modificado');
        return redirect('admin/comoayudar');

    }
    public function updateMensajeDifundiryAsistir(MensajesRequest $request)
    {

        $Mensaje = Mensajes::where('Tipo','DifundiryAsistir')->value('id');
        $MensajeDifundeyAsiste= Mensajes::where('id',$Mensaje)->update(array('Texto' => $request->Texto));
        Session::flash('message', 'El mensaje de Difunde y Asiste fue modificado');
        return redirect('admin/comoayudar');
    }


    public function storeRedesSociales (redesSocialesRequest $request)
    {

        $RedSocial = new RedesSociales($request->all());
        $RedSocial->Glyph = $request->Icono;
        Session::flash('message', $RedSocial->Titulo. ' fue agregado');
        $RedSocial->save();
        return redirect('admin/comoayudar');
    }

    public function updateRedesSociales (SeleccionRedesSocialesRequest $request)
    {
        $RedesSociales= RedesSociales::where('id',$request->Seleccion)->update(array('Titulo' => $request->Titulo,
            'Glyph' => $request->Icono, 'URLPagina' => $request->URLPagina));
        Session::flash('message', $request->Titulo. ' fue modificado');

        return redirect('admin/comoayudar');
    }

    public function deleteRedesSociales (ContenidoEliminarRequest $request)
    {
        $RedesSocialesDelete=RedesSociales::where('id',$request->Seleccion);
        $RedesSociales=RedesSociales::findOrFail($request->Seleccion);
        Session::flash('message', $RedesSociales->Titulo. ' fue eliminado');
        $RedesSocialesDelete->delete();
        return redirect('admin/comoayudar');
    }

    public function updateMensajeDonadores(MensajesRequest $request)
    {
        $Mensaje = Mensajes::where('Tipo','Donadores')->value('id');
        $MensajeDonadores= Mensajes::where('id',$Mensaje)->update(array('Texto' => $request->Texto));
        Session::flash('message', 'El mensaje de Donadores fue modificado');
        return redirect('admin/comoayudar');
    }

    public function storeDonadores (galeriaRequest $request)
    {
        $Donadores = new Contenido($request->all());
        $Donadores->Tipo = 'Donadores';
        $Donadores->save();
        Session::flash('message', $Donadores->Titulo. ' fue agregado');
        return redirect('admin/comoayudar');
    }

    public function updateDonadores (SeleccionGaleriaRequest $request)
    {
        $Donadores= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=> $request->Titulo,
            'Descripcion' => $request->Descripcion, 'URLImagen' => $request->URLImagen));
        Session::flash('message', $request->Titulo. ' fue modificado');
        return redirect('admin/comoayudar');
    }

    public function deleteDonadores(ContenidoEliminarRequest $request)
    {
        $DonadoresDelete= Contenido::where('id',$request->Seleccion);
        $Donadores= Contenido::findOrFail($request->Seleccion);
        Session::flash('message', $Donadores->Titulo. ' fue eliminado');
        $DonadoresDelete->delete();
        return redirect('admin/comoayudar');
    }
}
