<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
 *
 * Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});
 *
 *
 * */


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use NensdeLlum\CausasyProgramas;
use NensdeLlum\Contenido;
use NensdeLlum\Filosofia;
use NensdeLlum\Listas;
use NensdeLlum\Contacto;
use NensdeLlum\RedesSociales;



Route::get('admin',[
    'uses' => 'HomeController@index',
    'as' =>'admin']);


Route::get('admin/home',[
    'uses' => 'HomeController@index',
    'as' =>'admin'

]);
///////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
Route::post('admin/home/actualizar/Imagen1','HomeController@updateImagen1',array('before' => 'csrf', function()
{
    //
}));
Route::post('admin/home/actualizar/Imagen2','HomeController@updateImagen2',array('before' => 'csrf', function()
{
    //
}));
Route::post('admin/home/actualizar/Imagen3','HomeController@updateImagen3',array('before' => 'csrf', function()
{
    //
}));



////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

Route::get('admin/home/colaboradores/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Listas::where('id',$id)->get();

    return Response::json($informacion);

}));


Route::get('admin/home/notificaciones/carga',array('before' => 'csrf', function()
{

    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/home/logros/carga',array('before' => 'csrf', function()
{

    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));

/////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////

Route::post('admin/homeMensajeBienvenida/crear','HomeController@updateMensajeBienvenida',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/homeLogros/crear','HomeController@storeLogros',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeLogros/actualizar','HomeController@updateLogros',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/homeLogros/borrar','HomeController@deleteLogros',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeNotificaciones/crear','HomeController@storeNotificaciones',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeNotificaciones/actualizar','HomeController@updateNotificaciones',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeNotificaciones/borrar','HomeController@deleteNotificaciones',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeColaboradores/crear','HomeController@storeColaborador',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeColaborador/actualizar','HomeController@updateColaborador',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/homeColaborador/borrar','HomeController@deleteColaborador',array('before' => 'csrf', function()
{
    //
}));

///////////////////////////////////////////////////////////////////////////////////////////////////////

// Quienes somos admin
Route::get('admin/quienessomos',[
    'uses' => 'QuienesSomos@index',
    'as' => 'admin/quienessomos'

]);

Route::get('admin/quienessomos/evolucion/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/quienessomos/valores/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Listas::where('id',$id)->get();

    return Response::json($informacion);

}));


Route::get('admin/quienessomos/filosofias/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Filosofia::where('id',$id)->get();

    return Response::json($informacion);

}));


Route::get('admin/quienessomos/causas/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= CausasyProgramas::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/quienessomos/programas/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= CausasyProgramas::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::post('admin/quienesSomos/actualizar/quienessomos','QuienesSomos@updateMensajeQuienesSomos',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/evolucion','QuienesSomos@updateMensajeEvolucion',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/evolucionLista','QuienesSomos@updateEvolucionLista',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/crear/evolucionLista','QuienesSomos@storeEvolucionLista',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/borrar/evolucionLista','QuienesSomos@deleteEvolucionLista',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/quienesSomos/actualizar/mision','QuienesSomos@updateMensajeMision',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/quienesSomos/actualizar/vision','QuienesSomos@updateMensajeVision',array('before' => 'csrf', function()
{
    //
}));



Route::post('admin/quienesSomos/actualizar/MensajeValores','QuienesSomos@updateMensajeValores',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/valores','QuienesSomos@updateValoresLista',array('before' => 'csrf', function()
{
    //
}));



Route::post('admin/quienesSomos/actualizar/filosofiaMensaje','QuienesSomos@updateMensajeFilosofia',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/crear/filosofia','QuienesSomos@storeFilosofia',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/filosofia','QuienesSomos@updateFilosofia',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/borrar/filosofias','QuienesSomos@deleteFilosofia',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/PerfilPacientesMensaje','QuienesSomos@updateMensajePerfilPacientes',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/quienesSomos/actualizar/ProgramasMensaje','QuienesSomos@updateMensajeProgramas',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/crear/Causas','QuienesSomos@storeCausas',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/Causas','QuienesSomos@updateCausas',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/borrar/Causas','QuienesSomos@deleteCausas',array('before' => 'csrf', function()
{
    //
}));


Route::post('admin/quienesSomos/actualizar/CausasMensaje','QuienesSomos@updateCausasMensaje',array('before' => 'csrf', function()
{
    //
}));



Route::post('admin/quienesSomos/crear/Programas','QuienesSomos@storeProgramas',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/actualizar/Programas','QuienesSomos@updateProgramas',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/quienesSomos/borrar/Programas','QuienesSomos@deleteProgramas',array('before' => 'csrf', function()
{
    //
}));






////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////BOLETIN///////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

//boletin admin
Route::get('admin/boletin',[
    'uses' => 'Boletin@index',
    'as' => 'admin/boletin'

]);

Route::post('admin/boletin/crear/boletin','Boletin@storeBoletin',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/boletin/actualizar/boletin','Boletin@updateBoletin',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/boletin/borrar/boletin','Boletin@deleteBoletin',array('before' => 'csrf', function()
{
    //
}));


Route::get('admin/boletin/boletines/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));


Route::post('admin/boletin/enviar/boletines','Boletin@enviarBoletines',array('before' => 'csrf', function()
{
    //
}));


///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


Route::get('admin/contactanos',[
    'uses' => 'Contactanos@index',
    'as' => 'admin/contactanos'

]);


Route::post('admin/contactanos/actualizar/MapaContacto','Contactanos@updateURLUbicacion',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/contactanos/actualizar/Contacto','Contactanos@updateContactanos',array('before' => 'csrf', function()
{
    //
}));



Route::get('admin/contacto/planteles/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');
    $informacion= Contacto::where('id',$id)->get();
    return Response::json($informacion);
}));


///COMOAYUDAR ADMIN///


Route::get('admin/comoayudar',[
    'uses' => 'ComoAyudar@index',
    'as' => 'admin/comoayudar'

]);


Route::post('admin/comoayudar/actualizar/MensajecomoAyudar','ComoAyudar@updateMensajeComoAyudar',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/MensajeVoluntariado','ComoAyudar@updateMensajeVoluntariado',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/MensajeEfectivo','ComoAyudar@updateMensajeEfectivo',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/MensajeDifundeyAsiste','ComoAyudar@updateMensajeDifundiryAsistir',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/crear/RedesSociales','ComoAyudar@storeRedesSociales',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/RedesSociales','ComoAyudar@updateRedesSociales',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/borrar/RedesSociales','ComoAyudar@deleteRedesSociales',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/MensajeDonadores','ComoAyudar@updateMensajeDonadores',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/crear/Donadores','ComoAyudar@storeDonadores',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/actualizar/Donadores','ComoAyudar@updateDonadores',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/comoayudar/borrar/Donadores','ComoAyudar@deleteDonadores',array('before' => 'csrf', function()
{
    //
}));




/////ComoAyudar///////

Route::get('admin/comoAyudar/redessociales/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= RedesSociales::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/comoAyudar/donadores/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));


////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////


///GALERIA Y VIDEOS ADMIN///

Route::get('admin/galeriayvideos',[
    'uses' => 'GaleriaVideos@index',
    'as' => 'admin/galeriayvideos'

]);

Route::post('admin/galeriayvideos/crear/Imagenes','GaleriaVideos@storeImagenes',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/actualizar/Imagenes','GaleriaVideos@updateImagenes',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/borrar/Imagenes','GaleriaVideos@deleteImagenes',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/crear/Videos','GaleriaVideos@storeVideos',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/actualizar/Videos','GaleriaVideos@updateVideos',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/borrar/Videos','GaleriaVideos@deleteVideos',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/crear/Testimonios','GaleriaVideos@storeTestimonios',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/actualizar/Testimonios','GaleriaVideos@updateTestimonios',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/galeriayvideos/borrar/Testimonios','GaleriaVideos@deleteTestimonios',array('before' => 'csrf', function()
{
    //
}));


////////AJAX////////

/////Galeria///////

Route::get('admin/galeria/imagenes/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/galeria/videos/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));

Route::get('admin/galeria/testimonios/carga',array('before' => 'csrf', function()
{
    //
    $id=Input::get('id');

    $informacion= Contenido::where('id',$id)->get();

    return Response::json($informacion);

}));




//////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////    PUBLIC TEMPLATE      //////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/',[
    'uses' => 'IndexUsersPublicController@index',
    'as' =>'/'
]);


/////////////////////////////////////////////////////////////////////////////
Route::get('notificacionesItem/{id?}',[
        'uses' =>'IndexUsersPublicController@show',
        'as' =>'notificacionesItem']

);
////////////////////////////////////////////////////////////////////////

Route::get('home',[
    'uses' => 'IndexUsersPublicController@index',
    'as' =>'home'
]);

Route::get('quienessomos',[
    'uses' =>'quienesSomosUsersPublicController@index',
    'as' =>'quienessomos'
]);

Route::get('galeriayvideos',[
    'uses' =>'galeriaUsersPublicController@index',
    'as' =>'galeriayvideos'
]);
////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

Route::get('galeriavideosBuscar',[
    'uses' =>'galeriaUsersPublicController@buscarBuscador',
    'as' =>'galeriavideosBuscar'
]);



//////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
Route::get('comoayudar',[
    'uses' =>'comoAyudarUsersPublicController@index',
    'as' =>'comoayudar'
]);

Route::get('boletin',[
    'uses' =>'boletinUsersPublicController@index',
    'as' =>'boletin'
]);


Route::get('boletinLista',[
    'uses' =>'boletinUsersPublicController@buscarBuscador',
    'as' =>'boletinLista'
]);



Route::get('boletinItem/{id?}',[
    'uses' =>'boletinItemUsersPublicController@show',
    'as' =>'boletinItem']

);

Route::get('contactanos',[
    'uses' =>'contactanosUsersPublicController@index',
    'as' =>'contactanos'
]);



Route::post('contactanos',
        [
                    'uses' =>'contactanosUsersPublicController@mandarEmail',
                    'as' =>'contactanosEnviar'
        ],
        array('before' => 'csrf', function()
            {

            }
        )

);


Route::post('admin/contactanos/crear/ubicacion','Contactanos@storeUbicacion',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/contactanos/actualizar/ubicacion','Contactanos@updateUbicacion',array('before' => 'csrf', function()
{
    //
}));

Route::post('admin/contactanos/borrar/ubicacion','Contactanos@deleteUbicacion',array('before' => 'csrf', function()
{
    //
}));


////////////////////////////////////////////////////////////////////////

// Authentication routes...
Route::get('iniciarSesion',[
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'iniciarSesion'

]);

Route::post('iniciarSesion', 'Auth\AuthController@postLogin');


Route::get('cerrarSesion', [

    'uses'=>'Auth\AuthController@getLogout',
    'as'=>'cerrarSesion'
]);




// Registration routes...
Route::get('register',[
    'uses'=>'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('register', 'Auth\AuthController@postRegister');





// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

////////////////////////////////////////////////////////


// Authentication routes...
Route::get('admin/ajustes',[
    'uses' => 'ContrasenaController@index',
    'as' => 'admin/ajustes'

]);


Route::post('admin/ajustes/actualizar/contrasena','ContrasenaController@cambiarContrasena',array('before' => 'csrf', function()
{
    //
}));