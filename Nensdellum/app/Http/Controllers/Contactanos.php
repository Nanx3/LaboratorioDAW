<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use NensdeLlum\Contacto;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\URLContactoRequest;
use NensdeLlum\Http\Requests\ContactoRequest;
use NensdeLlum\Http\Requests\UbicacionRequest;
use NensdeLlum\Http\Requests\SeleccionUbicacionRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class Contactanos extends Controller
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
        $Planteles  =Contacto::where('id','>',1)->get();
        $ContactoU= Contacto::where('id',1)->value('Ubicacion');
        $ContactoD= Contacto::where('id',1)->value('Descripcion');
        $ContactoT= Contacto::where('id',1)->value('Telefono');
        $ContactoURL= Contacto::where('id',1)->value('URLUbicacion');



        return view ('admin/contactanos')->with([
            'ContactoU' => $ContactoU,
            'ContactoD' => $ContactoD,
            'ContactoT' => $ContactoT,
            'ContactoURL' => $ContactoURL,
            'Planteles' => $Planteles
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


    public function updateURLUbicacion(URLContactoRequest $request)
    {
        $MapaUpdate = Contacto::where('id',1)->update(array('URLUbicacion' => $request->URLUbicacion));
        Session::flash('message', 'La ubicacion de Nens de Llum fue modificada');
        return redirect('admin/contactanos');
    }


    public function updateContactanos(ContactoRequest $request)
    {
        $ContactoUpdate = Contacto::where('id',1)->update(array('Ubicacion' => $request->Sede, 'Descripcion' => $request->Descripcion,
           'Telefono' => $request->Telefono));
        Session::flash('message', 'La Direccion de Nens de Llum fue modificada');
        return redirect('admin/contactanos');
    }


    public function storeUbicacion(UbicacionRequest $request)
    {
        $Contacto = new Contacto();
        $Contacto->Ubicacion = $request->Ubicacion;
        $Contacto->Descripcion = $request->Descripcion;

        Session::flash('message', 'El plantel '.$request->Ubicacion.' fue agregado');
        $Contacto->save();
        return redirect('admin/contactanos');
    }

    public function updateUbicacion(SeleccionUbicacionRequest $request)
    {
        $ContactoUpdate = Contacto::where('id',$request->Seleccion)->update(array('Ubicacion' => $request->Ubicacion, 'Descripcion' => $request->Descripcion));
        Session::flash('message', 'El plantel '.$request->Ubicacion.' fue modificado');
        return redirect('admin/contactanos');
    }

    public function deleteUbicacion(ContenidoEliminarRequest $request)
    {
        $ContactoDelete = Contacto::where('id',$request->Seleccion);
        $Contacto = Contacto::findOrFail($request->Seleccion);
        Session::flash('message', 'El plantel '.$Contacto->Ubicacion.' fue eliminado');
        $ContactoDelete->delete();
        return redirect('admin/contactanos');
    }
}
