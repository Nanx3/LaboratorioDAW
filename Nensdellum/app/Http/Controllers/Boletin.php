<?php

namespace NensdeLlum\Http\Controllers;

use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use NensdeLlum\Contenido;
use NensdeLlum\Correo;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\ContenidoRequest;
use NensdeLlum\Http\Requests\SeleccionContenidoRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;

class Boletin extends Controller
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
        //

        $boletin = Contenido::where('Tipo','Boletin')->get();

        return view('admin/boletin')->with([


            'boletin' =>$boletin
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


    public function storeBoletin(ContenidoRequest $request)
    {


        $Boletin=new Contenido($request->all());


        $Boletin->Tipo='Boletin';



        $Boletin->save();


        Session::flash('message', $request->Titulo. ' ha sido agregado');

        return redirect('admin/boletin');
    }


    public function updateBoletin(SeleccionContenidoRequest  $request)
    {


        $colaboradoresListaUpdate= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=>$request->Titulo,
            'Tipo'=>'Boletin',
            'URLImagen'=>$request->URLImagen,
            'Descripcion'=>$request->Descripcion));


        Session::flash('message', $request->Titulo. ' ha sido modificado');

        return redirect('admin/boletin');
    }

    public function deleteBoletin(ContenidoEliminarRequest   $request)
    {

        $colaboradoresDelete=Contenido::where('id',$request->Seleccion);

        $Delete2=Contenido::findOrFail($request->Seleccion);



        $colaboradoresDelete->delete();

        Session::flash('message', $Delete2->Titulo. ' fue eliminado');


        return redirect('admin/boletin');
    }

    public function enviarBoletines(Request   $request)
    {
        $hoy=Carbon::now();
        //Calculando ultimo mes
        $ultimoMes=$hoy->subMonth(1);



        $boletinesEnviar =Contenido::where('Tipo','Boletin')->where('updated_at','>',$ultimoMes)->orderBy('updated_at','desc')->get();


        $correos = DB::table('correo')->get();


        foreach( $correos as $correos1){

            Mail::send('Enviar.EnviarBoletin', ['correos' => $correos1->nombre, 'boletinesEnviar' => $boletinesEnviar ], function ($m) use ($correos1)
            {


                $m->from('nensdellumqro@gmail.com','Nens de Llum');
                $m->to( $correos1->email );
                $m->subject('Boletin Mensual de Nens de Llum');


            });
        }





        Session::flash('message','El boletín mensual fue enviado');


        return redirect('admin/boletin');
    }
}
