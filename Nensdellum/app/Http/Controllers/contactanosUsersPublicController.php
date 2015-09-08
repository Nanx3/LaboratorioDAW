<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use NensdeLlum\Correo;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Contacto;
use NensdeLlum\Http\Requests\EnviarCorreoContactoRequest;
use NensdeLlum\RedesSociales;
use Illuminate\Support\Facades\DB;

class contactanosUsersPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $ContactoU= Contacto:: value('Ubicacion');
        $ContactoD= Contacto::value('Descripcion');
        $ContactoT= Contacto::value('Telefono');
        $ContactoURL= Contacto::value('URLUbicacion');
        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $Planteles  = Contacto::select('Ubicacion','Descripcion')->where('id','>',1)->get();



        return view ('layoutContactanos')->with([
        'ContactoU' => $ContactoU,
        'ContactoD' => $ContactoD,
        'ContactoT' => $ContactoT,
        'ContactoURL' => $ContactoURL,
        'redessociales'=>$redessociales,
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


    public function mandarEmail(EnviarCorreoContactoRequest $request)
    {
        //


        $encontrarEmail = Correo::where('email',$request->email)->value('email');

        if($encontrarEmail==null){

            $correo = new Correo($request->all());

            $correo->save();

        }


        $datos = $request;

        Mail::send('mensajeRecibido', compact('datos'), function ($m) use ($datos)
        {

            $m->from($datos->email,$datos->nombre);
            $m->to( 'nensdellumqro@gmail.com' );
            $m->subject($datos->asunto);


        });


        Session::flash('message', 'Mensaje enviado, Pronto nos contactáremos con usted');


        return redirect('contactanos');

    }


}
