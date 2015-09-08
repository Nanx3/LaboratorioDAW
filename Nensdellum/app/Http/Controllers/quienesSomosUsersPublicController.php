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
use NensdeLlum\Filosofia;
use NensdeLlum\CausasyProgramas;
use NensdeLlum\RedesSociales;

class quienesSomosUsersPublicController extends Controller
{
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

        $MensajeValores = Mensajes::where('Tipo','Valores')->value('Texto');

        $valores= Listas::select('id','Titulo','Descripcion')->where('Tipo','Valores')->get();

        $MensajeFilosofia= Mensajes::where('Tipo','Filosofia')->value('Texto');

        $filosofias =Filosofia::select('id','Descripcion','Glyph')->get();

        $MensajePacientes= Mensajes::where('Tipo','PerfilPacientes')->value('Texto');

        $causas= CausasyProgramas::where('Tipo','Causas')->get();

        $MensajeCausas = Mensajes::where('Tipo','Causas')->value('Texto');

        $programasMensaje =  Mensajes::where('Tipo','Programas')->value('Texto');

        $programas= CausasyProgramas::where('Tipo','Programas')->get();

        $redessociales= RedesSociales::select('Titulo','Glyph','URLPagina')->get();
        $ContactoT= Contacto::where('id',1)->value('Telefono');

        return view ('layoutQuienesSomos')->with([

            'quienesSomos'=>$quienesSomos,
            'MensajeEvolucion'=>$MensajeEvolucion,
            'evoluciones'=>$evoluciones,
            'Mision'=>$Mision,
            'Vision'=>$Vision,
            'valores'=>$valores,
            'MensajeFilosofia'=>$MensajeFilosofia,
            'filosofias'=>$filosofias,
            'MensajePacientes'=>$MensajePacientes,
            'Causas'=>$causas,
            'MensajeCausas'=>$MensajeCausas,
            'programasMensaje'=>$programasMensaje,
            'programas'=>$programas,
            'MensajeValores' => $MensajeValores,
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
