<?php

namespace NensdeLlum\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use NensdeLlum\Http\Requests;
use NensdeLlum\Http\Controllers\Controller;
use NensdeLlum\Http\Requests\CambiarContrasenaRequest;
use NensdeLlum\User;
use Illuminate\Support\Facades\Session;

class ContrasenaController extends Controller
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
        return view ('admin.Ajustes');
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


    public function cambiarContrasena(CambiarContrasenaRequest $request)
    {
      $Contrasena = User::where('id',Auth::id())->update(array('password'=> Hash::make($request->contrasena)));
       Session::flash('message', 'La contraseña fue modificada');
        return redirect('admin/ajustes');
    }



}
