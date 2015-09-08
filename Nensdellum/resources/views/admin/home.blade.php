@extends('admin.layout')

@section('css')
    <link href="{{asset('adminTemplate/css/bootstrap.css')}}" rel="stylesheet">

    <!--external css-->
    <link rel="stylesheet" href="{{ asset('adminTemplate/font-awesome/css/font-awesome.css')  }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/css/zabuto_calendar.css')  }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/js/gritter/css/jquery.gritter.css')  }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/lineicons/style.css')  }}">



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('adminTemplate/css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('adminTemplate/css/style-responsive.css')  }}">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <![endif]-->
@endsection


@section('barra')

    <!--header start-->
    <header class="header black-bg">

        <!--logo start-->
        <a href="{{ route('admin')}}" class="logo"><b>Nens de Llum</b></a>

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{route('cerrarSesion')}}">Cerrar Sesión</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->


@endsection


@section('contentImagenes')

  @include('Mensajes.mensajes')
  <!--  {!!Form::text('email',null,['class'=>'form-control','type'=>'email'])!!} -->

    <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Imágenes</h4>

                                {!! Form::open(['action'=>['HomeController@updateImagen1'],'class'=>'form-horizontal style-form'])!!}



                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                                        <div class="col-sm-8 " >
                                            <div class="input-group">
                                                <div class="input-group-addon">http://</div>

                                                {!!Form::text('URLImagen' ,$Imagen1,['class'=>'form-control','id'=>'URLImagen1','onchange'=>'myFunction("URLImagen1","imagen1Home")'])!!}

                                            </div>

                                            <span class="help-block">Inserte la dirección url , enlace o link</span>

                                            <div id="imagen1Home" style="text-align:center;"></div>

                                        </div>

                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                    </div>



                                {!! Form::close() !!}



                                {!! Form::open(['action'=>['HomeController@updateImagen2'],'class'=>'form-horizontal style-form']  )  !!}

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                                        <div class="col-sm-8 " >
                                            <div class="input-group">
                                                <div class="input-group-addon">http://</div>
                                                {!!Form::text('URLImagen2' ,$Imagen2,['class'=>'form-control','id'=>'URLImagen2','onchange'=>'myFunction("URLImagen2","imagen2Home")'])!!}
                                            </div>

                                            <span class="help-block">Inserte la dirección url , enlace o link</span>

                                            <div id="imagen2Home" style="text-align:center;"></div>

                                        </div>
                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                    </div>




                                {!! Form::close() !!}

                                {!! Form::open(['action'=>['HomeController@updateImagen3'],'class'=>'form-horizontal style-form']  )  !!}


                                <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                                        <div class="col-sm-8 " >
                                            <div class="input-group">
                                                <div class="input-group-addon">http://</div>
                                                {!!Form::text('URLImagen3' ,$Imagen3,['class'=>'form-control','id'=>'URLImagen3','onchange'=>'myFunction("URLImagen3","imagen3Home")'])!!}
                                            </div>

                                            <span class="help-block">Inserte la dirección url , enlace o link</span>

                                            <div id="imagen3Home" style="text-align:center;"></div>
                                        </div>



                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}



                                    </div>



                                {!! Form::close() !!}






                            </div>
                        </div>





@endsection


@section('contentBienvenidos')


                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Mensaje de Bienvenida</h4>
                             <!--   <form class="form-horizontal style-form" route ='admin.users.store' method= 'POST'>-->


                                {!! Form::open(['action'=>['HomeController@updateMensajeBienvenida'],'class'=>'form-horizontal style-form']  )  !!}
                                        {!!Form::textarea('Texto' ,$bienvenidos ,['class'=>'form-control'])!!}

                                        <span class="help-block">Inserte el mensaje de Bienvenida</span>
                                     {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                {!! Form::close() !!}

                                <!-- </form> -->



                            </div>
                        </div>

@endsection


@section('logros')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Logros</h4>
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settings" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logout">
                        <br>
                        {!! Form::open(['action'=>['HomeController@storeLogros'],'class'=>'form-horizontal style-form']  )  !!}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título del logro</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagen4','onchange'=>'myFunction("URLImagen4","imagen4Home")'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen4Home" style="text-align:center;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="add-comment">
                        <br>
                        {!! Form::open(['action'=>['HomeController@updateLogros'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Logro</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionLogros">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($logrosLista as $logro)
                                    <option value="{{ $logro->id  }} " > {{ $logro->Titulo}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título del logro</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloLogros'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionLogros'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagen5','onchange'=>'myFunction("URLImagen5","imagen5Home")'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen5Home" style="text-align:center;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="account-settings">
                        <br>
                        {!! Form::open(['action'=>['HomeController@deleteLogros'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Logro</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionLogros">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($logrosLista as $logro)
                                    <option value="{{ $logro->id  }} " > {{ $logro->Titulo}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Eliminar',['class'=>'btn btn-theme04','onclick'=>'return confirm("¿Seguro que desea eliminar?")'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('notificaciones')
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Notificaciones</h4>
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logoutnotificaciones" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-commentnotificaciones" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settingsnotificaciones" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logoutnotificaciones">
                        <br>
                        {!! Form::open(['action'=>['HomeController@storeNotificaciones'],'class'=>'form-horizontal style-form']  )  !!}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título de la notificación</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagen6','onchange'=>'myFunction("URLImagen6","imagen6Home")'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen6Home" style="text-align:center;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="add-commentnotificaciones">
                        <br>
                        {!! Form::open(['action'=>['HomeController@updateNotificaciones'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Notificación</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionNotificacion">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($notificacionesLista as $notificacion)
                                    <option value="{{ $notificacion->id  }} " > {{ $notificacion->Titulo}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título de la notificación</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloNotificaciones'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionNotificaciones'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagen7','onchange'=>'myFunction("URLImagen7","imagen7Home")'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen7Home" style="text-align:center;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="account-settingsnotificaciones">
                        <br>
                        {!! Form::open(['action'=>['HomeController@deleteNotificaciones'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Notificación</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($notificacionesLista as $notificacion)
                                    <option value="{{ $notificacion->id  }} " > {{ $notificacion->Titulo}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Eliminar',['class'=>'btn btn-theme04','onclick'=>'return confirm("Seguro que desea eliminar?")'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('colaboradores')


    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Colaboradores</h4>


                <div class="comment-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#comments-logoutColaboradores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                        <li><a href="#add-commentColaboradores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                        <li><a href="#account-settingsColaboradores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="comments-logoutColaboradores">

                            <br>
                            {!! Form::open(['action'=>['HomeController@storeColaborador'],'class'=>'form-horizontal style-form']  )  !!}




                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Título del colaborador</label>
                                    <div class="col-sm-10">
                                        {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                                    <div class="col-sm-10">
                                        {!!Form::textarea('Descripcion' ,null,['class'=>'form-control'])!!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">

                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                                    </div>
                                </div>
                            {!! Form::close() !!}




                        </div>
                        <div class="tab-pane" id="add-commentColaboradores">

                            <br>

                            {!! Form::open(['action'=>['HomeController@updateColaborador'],'class'=>'form-horizontal style-form']  )  !!}

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Colaborador</label>
                                <div class="col-sm-10">
                                    <select name="Seleccion" class="form-control" id="SeleccionColaborador">
                                        <option value="">Selecciona una opción</option>
                                        @foreach($colaboradoresLista as $colaborador)
                                        <option value="{{ $colaborador->id }} " > {{ $colaborador->Titulo}}  </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Título del colaborador</label>
                                    <div class="col-sm-10" >
                                        {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloColaborador'])!!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                                    <div class="col-sm-10">
                                        {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionColaborador'])!!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">

                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}



                                    </div>
                                </div>
                            {!! Form::close() !!}

                        </div>
                        <div class="tab-pane" id="account-settingsColaboradores">

                            <br>

                            {!! Form::open(['action'=>['HomeController@deleteColaborador'],'class'=>'form-horizontal style-form']  )  !!}

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Colaborador</label>
                                <div class="col-sm-10">
                                    <select name="Seleccion" class="form-control">
                                        <option value="">Selecciona una opción</option>
                                        @foreach($colaboradoresLista as $colaborador)
                                        <option value="{{ $colaborador->id }} " > {{ $colaborador->Titulo}}  </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">

                                        {!! Form::submit('Eliminar',['class'=>'btn btn-theme04','onclick'=>'return confirm("¿Seguro que desea eliminar?")'])!!}

                                    </div>
                                </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>



        </div>
    </div>

    @include('js.Javascript')


@endsection


