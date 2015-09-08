<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use NensdeLlum\CausasyProgramas;
use NensdeLlum\Contenido;
use NensdeLlum\Filosofia;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\CausasProgramasRequest;
use NensdeLlum\Http\Requests\SeleccionCausasyProgramasRequest;
use NensdeLlum\Http\Requests\ContenidoRequest;
use NensdeLlum\Http\Requests\SeleccionContenidoRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;
use NensdeLlum\Http\Requests\FilosofiaRequest;
use NensdeLlum\Http\Requests\SeleccionFilosofiaRequest;
use NensdeLlum\Http\Requests\ListasRequest;
use NensdeLlum\Http\Requests\SeleccionListaRequest;
use NensdeLlum\Http\Requests\MensajesRequest;
use NensdeLlum\Listas;
use NensdeLlum\Mensajes;

class QuienesSomos extends Controller
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
        $quienesSomos= Mensajes::where('Tipo','QuienesSomos')->value('Texto');
        $MensajeEvolucion= Mensajes::where('Tipo','Evolucion')->value('Texto');



        $evoluciones= Contenido::select('id','Titulo','Descripcion','URLImagen')->where('Tipo','Evolucion')->get();

        $Mision= Mensajes::where('Tipo','Mision')->value('Texto');
        $Vision= Mensajes::where('Tipo','Vision')->value('Texto');
        $ValoresMensaje= Mensajes::where('Tipo','Valores')->value('Texto');



        $valoresLista = Listas::get();


        $MensajeFilosofia= Mensajes::where('Tipo','Filosofia')->value('Texto');


        $filosofiasLista = Filosofia::select('Glyph','id','Descripcion')->get();


        $MensajePacientes= Mensajes::where('Tipo','PerfilPacientes')->value('Texto');

        $causasLista = CausasyProgramas::where('Tipo','Causas')->get();


        $causasMensaje =  Mensajes::where('Tipo','Causas')->value('Texto');

        $programasMensaje =  Mensajes::where('Tipo','Programas')->value('Texto');


        $programasLista = CausasyProgramas::where('Tipo','Programas')->get();



        return view ('admin/quienessomos')->with([

                'quienesSomos'=>$quienesSomos,
                'MensajeEvolucion'=>$MensajeEvolucion,
                'evoluciones'=>$evoluciones,
                'Mision'=>$Mision,
                'Vision'=>$Vision,
                'ValoresMensaje'=>$ValoresMensaje,
                'valoresLista'=>$valoresLista,
                'MensajeFilosofia'=>$MensajeFilosofia,
                'FilosofiasLista'=>$filosofiasLista ,
                'MensajePacientes'=>$MensajePacientes,
                'CausasLista'=>$causasLista,
                'CausasMensaje'=>$causasMensaje,
                'programasMensaje'=>$programasMensaje,
                'programasLista'=>$programasLista,

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



    public function updateMensajeQuienesSomos(MensajesRequest $request)
    {


        $menjajeID= Mensajes::where('Tipo','QuienesSomos')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));

        Session::flash('message', 'El mensaje de ¿Quiénes Sómos? fue modificado');


        return redirect('admin/quienessomos');
    }

    public function updateMensajeEvolucion(MensajesRequest $request)
    {


        $menjajeID= Mensajes::where('Tipo','Evolucion')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));


        Session::flash('message', 'El mensaje de Evolución fue modificado');


        return redirect('admin/quienessomos');
    }


    public function updateMensajeMision(MensajesRequest $request)
    {


        $menjajeID= Mensajes::where('Tipo','Mision')->value('id');


        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));



        Session::flash('message', 'El mensaje de Misión fue modificado');



        return redirect('admin/quienessomos');
    }

    public function updateMensajeVision(MensajesRequest $request)
    {

        $menjajeID= Mensajes::where('Tipo','Vision')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));



        Session::flash('message', 'El mensaje de Visión fue modificado');




        return redirect('admin/quienessomos');
    }


    public function updateMensajeValores(MensajesRequest $request)
    {

        $menjajeID= Mensajes::where('Tipo','Valores')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));


        Session::flash('message', 'El mensaje de Valores fue modificado');


        return redirect('admin/quienessomos');
    }


    public function updateMensajeFilosofia(MensajesRequest $request)
    {

        $menjajeID= Mensajes::where('Tipo','Filosofia')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));


        Session::flash('message', 'El mensaje de Filosofía Institucional fue modificado');



        return redirect('admin/quienessomos');
    }


    public function updateMensajePerfilPacientes(MensajesRequest $request)
    {

        $menjajeID= Mensajes::where('Tipo','PerfilPacientes')->value('id');

        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));


        Session::flash('message', 'El mensaje de Perfil de Pacientes fue modificado');


        return redirect('admin/quienessomos');
    }

    public function updateMensajeProgramas(MensajesRequest $request)
    {


        $menjajeID= Mensajes::where('Tipo','Programas')->value('id');
        $menjajeUpdate= Mensajes::where('id',$menjajeID)->update(
            array('Texto'=>$request->Texto));



        Session::flash('message', 'El mensaje de Programas fue modificado');



        return redirect('admin/quienessomos');
    }


    public function updateEvolucionLista(SeleccionContenidoRequest $request)
    {
        $EvolucionUpdate= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Evolucion','Descripcion'=>$request->Descripcion,'URLImagen'=>$request->URLImagen));

        Session::flash('message', $request->Titulo. ' fue modificado');

        return redirect('admin/quienessomos');
    }


    public function storeEvolucionLista(ContenidoRequest $request)
    {

        $guardar=new Contenido($request->all());

        $guardar->Tipo='Evolucion';

        $guardar->save();

        Session::flash('message', $request->Titulo. ' ha sido agregado');

        return redirect('admin/quienessomos');
    }

    public function deleteEvolucionLista(ContenidoEliminarRequest $request)
    {
        $delete=Contenido::where('id',$request->Seleccion);
        $Delete2=Contenido::findOrFail($request->Seleccion);
        $delete->delete();
        Session::flash('message', $Delete2->Titulo. ' fue eliminado');
        return redirect('admin/quienessomos');
    }

    public function updateValoresLista(SeleccionListaRequest $request)
    {
        $EvolucionUpdate= Listas::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Valores','Descripcion'=>$request->Descripcion));

        Session::flash('message', $request->Titulo. ' fue modificado');

        return redirect('admin/quienessomos');
    }


    /**
     * @param FilosofiaRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeFilosofia(FilosofiaRequest $request)
    {


        $filosofia=new Filosofia($request->all());
        $filosofia->glyph =$request->Icono;
        $filosofia->save();


        Session::flash('message', $request->Descripcion. ' ha sido agregado');


        return redirect('admin/quienessomos');
    }

    public function updateFilosofia(SeleccionFilosofiaRequest $request)
    {

        $Update= Filosofia::where('id',$request->Seleccion)->update(array('Descripcion'=>$request->Descripcion,
            'Glyph'=>$request->Glyph));

        Session::flash('message', $request->Descripcion. ' ha sido modificado');

        return redirect('admin/quienessomos');
    }

    public function deleteFilosofia(ContenidoEliminarRequest $request)
    {

        $delete=Filosofia::where('id',$request->Seleccion);

        $Delete2=Filosofia::findOrFail($request->Seleccion);


        $delete->delete();

        Session::flash('message', $Delete2->Descripcion. ' fue eliminado');


        return redirect('admin/quienessomos');
    }

    public function storeCausas(CausasProgramasRequest $request)
    {



        $guardar=new CausasyProgramas($request->all());




        $guardar->Tipo='Causas';

        $guardar->save();

        Session::flash('message', $request->Texto. ' ha sido agregado');
        return redirect('admin/quienessomos');
    }

    public function updateCausas(SeleccionCausasyProgramasRequest $request)
    {

        $Update= CausasyProgramas::where('id',$request->Seleccion)->update(array('Texto'=>$request->Texto));

        Session::flash('message', $request->Texto. ' ha sido modificado');
        return redirect('admin/quienessomos');
    }

    public function deleteCausas(ContenidoEliminarRequest $request)
    {

        $delete=CausasyProgramas::where('id',$request->Seleccion);
        $Delete2=CausasyProgramas::findOrFail($request->Seleccion);

        $delete->delete();

        Session::flash('message', $Delete2->Texto. ' fue eliminado');
        return redirect('admin/quienessomos');
    }


    public function updateCausasMensaje(MensajesRequest $request)
    {

        $menjajeID= Mensajes::where('Tipo','Causas')->value('id');
        $Update= Mensajes::where('id',$menjajeID)->update(array('Texto'=>$request->Texto));

        Session::flash('message', 'El mensaje de Causas fue modificado');
        return redirect('admin/quienessomos');
    }




    public function storeProgramas(CausasProgramasRequest $request)
    {



        $guardar=new CausasyProgramas($request->all());

        $guardar->Tipo='Programas';

        $guardar->save();

        Session::flash('message', $request->Texto. ' ha sido agregado');


        return redirect('admin/quienessomos');
    }

    public function updateProgramas(SeleccionCausasyProgramasRequest $request)
    {

        $Update= CausasyProgramas::where('id',$request->Seleccion)->update(array('Texto'=>$request->Texto));

        Session::flash('message', $request->Texto. ' ha sido modificado');

        return redirect('admin/quienessomos');
    }

    public function deleteProgramas(ContenidoEliminarRequest $request)
    {

        $delete=CausasyProgramas::where('id',$request->Seleccion);
        $Delete2=CausasyProgramas::findOrFail($request->Seleccion);

        $delete->delete();

        Session::flash('message', $Delete2->Texto. ' fue eliminado');


        return redirect('admin/quienessomos');
    }

}
