<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Contenido;
use NensdeLlum\Http\Requests\galeriaRequest;
use NensdeLlum\Http\Requests\ContenidoEliminarRequest;
use NensdeLlum\Http\Requests\SeleccionGaleriaRequest;
use Illuminate\Support\Facades\DB;


class GaleriaVideos extends Controller
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
        $galeriaImagenes =Contenido::where('Tipo','Imagenes')->get();
        $galeriaVideos = Contenido::where('Tipo','Videos')->get();
        $galeriaTestimonios = Contenido::where('Tipo','Testimonios')->get();

        return view('admin/galeriasyvideos')->with([
            'galeriaImagenes'=>$galeriaImagenes,
            'galeriaVideos' => $galeriaVideos,
            'galeriaTestimonios' => $galeriaTestimonios
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

    public function storeImagenes (galeriaRequest $request)
    {
        $Imagenes = new Contenido($request->all());
        $Imagenes->Tipo = 'Imagenes';
        Session::flash('message', $Imagenes->Titulo. ' fue agregado');
        $Imagenes->save();
        return redirect('admin/galeriayvideos');
    }

    public function updateImagenes (SeleccionGaleriaRequest $request)
    {
        $Imagenes= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=> $request->Titulo,
            'Descripcion' => $request->Descripcion, 'URLImagen' => $request->URLImagen));
        Session::flash('message', $request->Titulo.' fue modificado');
        return redirect('admin/galeriayvideos');
    }


    public function deleteImagenes (ContenidoEliminarRequest $request)
    {
        $ImagenesDelete= Contenido::where('id',$request->Seleccion);
        $Imagenes=Contenido::findOrFail($request->Seleccion);
        Session::flash('message', $Imagenes->Titulo.' fue eliminado');
        $ImagenesDelete->delete();
        return redirect('admin/galeriayvideos');
    }

    public function storeVideos (galeriaRequest $request)
    {
        $Videos = new Contenido($request->all());
        $Videos->Tipo = 'Videos';
        Session::flash('message', $Videos->Titulo. ' fue agregado');
        $Videos->save();
        return redirect('admin/galeriayvideos');
    }

    public function updateVideos (SeleccionGaleriaRequest $request)
    {
        $Videos= Contenido::where('id',$request->Seleccion)->update(array('Titulo'=> $request->Titulo,
            'Descripcion' => $request->Descripcion, 'URLImagen' => $request->URLImagen));
        Session::flash('message', $request->Titulo. ' fue modificado');
        return redirect('admin/galeriayvideos');
    }


    public function deleteVideos (ContenidoEliminarRequest $request)
    {
        $VideosDelete= Contenido::where('id',$request->Seleccion);
        $Videos=Contenido::findOrFail($request->Seleccion);
        Session::flash('message', $Videos->Titulo. ' fue eliminado');
        $VideosDelete->delete();

        return redirect('admin/galeriayvideos');
    }

    public function storeTestimonios (galeriaRequest $request)
    {
        $Testimonios = new Contenido($request->all());
        $Testimonios->Tipo = 'Testimonios';
        Session::flash('message', $Testimonios->Titulo. ' fue agregado');
        $Testimonios->save();
        return redirect('admin/galeriayvideos');
    }

    public function updateTestimonios (SeleccionGaleriaRequest $request)
    {
        $Testimonios = Contenido::where('id',$request->Seleccion)->update(array('Titulo'=> $request->Titulo,
            'Descripcion' => $request->Descripcion, 'URLImagen' => $request->URLImagen));
        Session::flash('message', $request->Titulo. ' fue modificado');
        return redirect('admin/galeriayvideos');
    }


    public function deleteTestimonios (ContenidoEliminarRequest $request)
    {
        $TestimoniosDelete = Contenido::where('id',$request->Seleccion);
        $Testimonios=Contenido::findOrFail($request->Seleccion);
        Session::flash('message', $Testimonios->Titulo. ' fue eliminado');
        $TestimoniosDelete->delete();

        return redirect('admin/galeriayvideos');
    }

}
