<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use NensdeLlum\Http\Requests\ContenidoRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;

use Illuminate\Support\Facades\DB;
use NensdeLlum\Contacto;
use NensdeLlum\Contenido;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\ListasRequest;
use NensdeLlum\Http\Requests\MensajesRequest;
use NensdeLlum\Http\Requests\SeleccionListaRequest;
use NensdeLlum\Http\Requests\SeleccionContenidoRequest;
use NensdeLlum\Http\Requests\URLImagenesInicioRequest;
use NensdeLlum\Http\Requests\URLImagenesInicioRequest2;
use NensdeLlum\Http\Requests\URLImagenesInicioRequest3;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;
use NensdeLlum\User;

class HomeController extends Controller
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


        $bienvenidos= Mensajes::where('Tipo','Bienvenidos')->value('Texto');

        $logrosLista =Contenido::where('Tipo','Logros')->get();

        $notificacionesLista =Contenido::where('Tipo','Notificaciones')->get();

        $colaboradoresLista = Listas::where('Tipo','Colaboradores')->get();

        $Imagen1 = Contenido::where('Tipo','Imagen1')->value('URLImagen');
        $Imagen2 = Contenido::where('Tipo','Imagen2')->value('URLImagen');
        $Imagen3 = Contenido::where('Tipo','Imagen3')->value('URLImagen');




        return view ('admin/home')->with([

            'bienvenidos'=>$bienvenidos,

            'notificacionesLista'=> $notificacionesLista,
            'colaboradoresLista'=> $colaboradoresLista,
            'logrosLista'=> $logrosLista,
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




    public function updateMensajeBienvenida(MensajesRequest $request)
    {


        $menjajeID= Mensajes::where('Tipo','Bienvenidos')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));

        Session::flash('message', 'El mensaje de Bienvenida fue modificado');
        return redirect('admin/home');
    }




    public function storeLogros(ContenidoRequest $request)
    {


        $logros=new Contenido($request->all());

        $logros->Tipo='Logros';


        $logros->save();

        Session::flash('message', $request->Titulo. ' ha sido agregado');

        return redirect('admin/home');
    }


    public function editLogros($id)
    {
        //
        $logros= Contenido::findOrFail($id);
        return view('admin/home',compact('logros'));
    }

    public function updateLogros(SeleccionContenidoRequest $request)
    {


        $logroUpdate= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Logros','Descripcion'=>$request->Descripcion,'URLImagen'=>$request->URLImagen));

        Session::flash('message', $request->Titulo. ' fue modificado');



        return redirect('admin/home');
    }

    public function deleteLogros(ContenidoEliminarRequest  $request)
    {

        $logroDelete=Contenido::where('id',$request->Seleccion);

        $logroDelete2=Contenido::findOrFail($request->Seleccion);

        $logroDelete->delete();


        Session::flash('message', $logroDelete2->Titulo. ' fue eliminado');


        return redirect('admin/home');
    }




    public function storeNotificaciones(ContenidoRequest $request)
    {

        $Notificaciones=new Contenido($request->all());

        $Notificaciones->Tipo='Notificaciones';

        $Notificaciones->save();


        Session::flash('message', $request->Titulo. ' ha sido agregado');

        return redirect('admin/home');
    }

    public function updateNotificaciones(SeleccionContenidoRequest $request)
    {


        $logroUpdate= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Notificaciones','Descripcion'=>$request->Descripcion,'URLImagen'=>$request->URLImagen));

        Session::flash('message', $request->Titulo. ' fue modificado');

        return redirect('admin/home');
    }

    public function deleteNotificaciones(ContenidoEliminarRequest  $request)
    {

        $notificacionesDelete=Contenido::findOrFail($request->Seleccion);
        $notificacionesDelete2=Contenido::findOrFail($request->Seleccion);



        $notificacionesDelete->delete();

        Session::flash('message', $notificacionesDelete2->Titulo. ' fue eliminado');

        return redirect('admin/home');
    }

    public function storeColaborador(ListasRequest $request)
    {


        $Colaborador=new Listas($request->all());


        $Colaborador->Tipo='Colaboradores';



        $Colaborador->save();
        Session::flash('message', $Colaborador->Titulo. ' ha sido agregado');

        return redirect('admin/home');
    }


    public function updateColaborador(SeleccionListaRequest $request)
    {


        $colaboradoresListaUpdate= Listas::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Colaboradores','Descripcion'=>$request->Descripcion));


        Session::flash('message', $request->Titulo. ' fue modificado');
        return redirect('admin/home');
    }

    public function deleteColaborador(ContenidoEliminarRequest  $request)
    {

        $colaboradoresDelete=Listas::where('id',$request->Seleccion);


        $colaborador= Listas::findOrFail($request->Seleccion);

        $colaboradoresDelete->delete();

        Session::flash('message', $colaborador->Titulo. ' fue eliminado');

        return redirect('admin/home');
    }



    /////////HOME IMAGENES/////////

    public function updateImagen1(URLImagenesInicioRequest $request)
    {

        $Imagen1= Contenido::where('Tipo','Imagen1')->update(array(
            'URLImagen'=>$request->URLImagen));
        Session::flash('message', 'La imagen 1 fue modificada');
        return redirect('admin/home');
    }

    public function updateImagen2(URLImagenesInicioRequest2 $request)
    {
        $Imagen2= Contenido::where('Tipo','Imagen2')->update(array(
            'URLImagen'=>$request->URLImagen2));
        Session::flash('message', 'La imagen 2 fue modificada');
        return redirect('admin/home');
    }


    public function updateImagen3(URLImagenesInicioRequest3 $request)
    {
        $Imagen3= Contenido::where('Tipo','Imagen3')->update(array(
            'URLImagen'=>$request->URLImagen3));
        Session::flash('message', 'La imagen 3 fue modificada');
        return redirect('admin/home');
    }



}
