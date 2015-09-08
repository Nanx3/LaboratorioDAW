@extends('admin.layoutComoAyudar')

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

@section('contentAyuda')

    @include('Mensajes.mensajes')


        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i>¿Cómo Ayudar? </h4>

                {!! Form::open(['action'=>['ComoAyudar@updateMensajeComoAyudar'],'class'=>'form-horizontal style-form']  )  !!}


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Mensaje</label>
                        <div class="col-sm-10">
                            {!!Form::textarea('Texto' ,$MensajeComoAyudar,['class'=>'form-control'])!!}
                            <span class="help-block">Inserte el contenido</span>

                        </div>

                    </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                {!! Form::close() !!}



            </div>
        </div>

@endsection


@section('voluntariado')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Voluntariado</h4>



            {!! Form::open(['action'=>['ComoAyudar@updateMensajeVoluntariado'],'class'=>'form-horizontal style-form']  )  !!}


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$MensajeVoluntariado ,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>

                    </div>

                </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                {!! Form::close() !!}


        </div>
    </div>

@endsection


@section('efectivo')



    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Efectivo</h4>


            {!! Form::open(['action'=>['ComoAyudar@updateMensajeEfectivo'],'class'=>'form-horizontal style-form']  )  !!}


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$MensajeEfectivo,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                {!! Form::close() !!}

        </div>
    </div>

@endsection



@section('difundeyasiste')



    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Difunde y asiste</h4>


            {!! Form::open(['action'=>['ComoAyudar@updateMensajeDifundiryAsistir'],'class'=>'form-horizontal style-form']  )  !!}


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$MensajeDifundiryAsistir,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection



@section('redesSociales')
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Redes Sociales</h4>

            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#crearRedS" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#actualizarRedS" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#borrarRedS" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="crearRedS">
                        <br>

                        {!! Form::open(['action'=>['ComoAyudar@storeRedesSociales'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Título de la red social</label>
                            <div class="col-sm-10 ">
                                    {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link de Nens de Llum en la red social</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        {!!Form::text('URLPagina' ,null,['class'=>'form-control'])!!}
                                    </div>

                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                </div>
                        </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Icono de la red social</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-addon">fa fa-icon</div>
                                        {!!Form::text('Icono',null,['class'=>'form-control'])!!}
                                    </div>
                                    <span class="help-block">Inserta el icono de tu preferencia (<a href="http://fortawesome.github.io/Font-Awesome/icons/"> http://fortawesome.github.io/Font-Awesome/icons/ </a>)</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>

                    <div class="tab-pane" id="actualizarRedS">
                        {!! Form::open(['action'=>['ComoAyudar@updateRedesSociales'],'class'=>'form-horizontal style-form']  )  !!}
                        <br>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Red Social</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionRedesSociales">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($RedesSocialesSeleccion as $RedeSocial)
                                    <option value="{{  $RedeSocial->id  }} " > {{ $RedeSocial->Titulo}}  </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Título de la red social</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloRedSocial'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link de Nens de Llum en la red social</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        {!!Form::text('URLPagina',null,['class'=>'form-control','id'=>'URLPaginaRedSocial'])!!}
                                    </div>

                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Icono de la red social</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <div class="input-group-addon">fa fa-icon</div>
                                        {!!Form::text('Icono',null,['class'=>'form-control','id'=>'GlyphRedSocial'])!!}
                                    </div>
                                    <span class="help-block">Inserta el icono de tu preferencia (<a href="http://fortawesome.github.io/Font-Awesome/icons/"> http://fortawesome.github.io/Font-Awesome/icons/ </a>)</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}
                                </div>
                            </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="tab-pane" id="borrarRedS">

                        <br>

                        {!! Form::open(['action'=>['ComoAyudar@deleteRedesSociales'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Red Social</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($RedesSocialesSeleccion as $RedeSocial)
                                    <option value="{{  $RedeSocial->id  }} " > {{ $RedeSocial->Titulo}}  </option>
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


@section('donadores')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Donadores</h4>

         <div>

            {!! Form::open(['action'=>['ComoAyudar@updateMensajeDonadores'],'class'=>'form-horizontal style-form']  )  !!}


            <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Mensaje</label>
                        <div class="col-sm-10">
                            {!!Form::textarea('Texto',$MensajeDonadores,['class'=>'form-control'])!!}
                        </div>

            </div>
             {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                <br><br>
            {!! Form::close() !!}


        <div class="comment-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#crearDonadores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                        <li><a href="#actualizarDonadores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                        <li><a href="#borrarDonadores" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="crearDonadores">

                            {!! Form::open(['action'=>['ComoAyudar@storeDonadores'],'class'=>'form-horizontal style-form']  )  !!}

                            <br>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Título Donador</label>
                                <div class="col-sm-10">
                                    {!!Form::text('Titulo',null,['class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Descripción</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Descripcion',null,['class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Inserta URL de Imagen</label>
                                <div class="col-sm-10 " >
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagen','onchange'=>'myFunction("URLImagen","vistaComoAyudar")'])!!}
                                    </div>
                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                </div>
                                <br>
                                <div id="vistaComoAyudar" style="text-align:center;"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                                </div>
                            </div>


                            {!! Form::close() !!}

                        </div>


                        <div class="tab-pane" id="actualizarDonadores">

                            <br>

                            {!! Form::open(['action'=>['ComoAyudar@updateDonadores'],'class'=>'form-horizontal style-form']  )  !!}


                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Donador</label>
                                <div class="col-sm-10">
                                    <select name="Seleccion" class="form-control" id="SeleccionDonadores">
                                        <option value="">Selecciona una opción</option>
                                        @foreach($Donadores as $Donador)
                                        <option value="{{ $Donador->id  }} " > {{ $Donador->Titulo}}  </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Título Donador</label>
                                    <div class="col-sm-10">
                                        {!!Form::text('Titulo',null,['class'=>'form-control','id'=>'TituloDonadores'])!!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                                    <div class="col-sm-10">
                                        {!!Form::textarea('Descripcion',null,['class'=>'form-control','id'=>'DescripcionDonadores'])!!}
                                    </div>
                                </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Inserta URL de Imagen</label>
                                <div class="col-sm-10 " >
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagenComoA','onchange'=>'myFunction("URLImagenComoA","imagen1ComoAyudar")'])!!}
                                    </div>
                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                </div>
                                <div id="imagen1ComoAyudar" style="text-align:center;"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>

                        <div class="tab-pane" id="borrarDonadores">

                            <br>

                            {!! Form::open(['action'=>['ComoAyudar@deleteDonadores'],'class'=>'form-horizontal style-form']  )  !!}

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Donador</label>
                                <div class="col-sm-10">
                                    <select name="Seleccion" class="form-control">
                                        <option value="">Selecciona una opción</option>
                                        @foreach($Donadores as $Donador)
                                        <option value="{{ $Donador->id  }} " > {{ $Donador->Titulo}}  </option>
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
    </div>

    @include('js.Javascript')


@endsection