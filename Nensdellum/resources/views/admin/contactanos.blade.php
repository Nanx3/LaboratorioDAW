@extends('admin.layoutContactanos')

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




@section('mapa')

    @include('Mensajes.mensajes')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Mapa</h4>

            {!! Form::open(['action'=>['Contactanos@updateURLUbicacion'],'class'=>'form-horizontal style-form' ]) !!}

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Ubicación en el mapa</label>
                    <div class="col-sm-8 " >
                        <div class="input-group">
                            <div class="input-group-addon">http://</div>


                            {!!Form::text('URLUbicacion' ,$ContactoURL,['class'=>'form-control'])!!}

                        </div>

                        <span class="help-block">Inserte la dirección url , enlace o link</span>
                    </div>
                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm(“¿Seguro que desea modificar?")'])!!}
                </div>
            {!! Form::close() !!}

        </div>
    </div>

@endsection



@section('ubicacion')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Información Nens de Llum</h4>

                <div class="tab-content">

                    <div class="tab-pane active" id="comments-logoutDirección">
                        <br>
                        {!! Form::open(['action'=>['Contactanos@updateContactanos'],'class'=>'form-horizontal style-form','id'=>'commentForm' ]) !!}

                            <div class="form-group">

                                <label class="col-sm-2 col-sm-2 control-label">Sede de la organización</label>
                                <div class="col-sm-10 ">

                                        {!!Form::text('Sede' ,$ContactoU,['class'=>'form-control'])!!}

                                    </div>
                             </div>

                            <div class="form-group">
                                <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                                <div class="col-sm-10">
                                    {!!Form::text('Telefono' ,$ContactoT,['class'=>'form-control'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Ubicación</label>
                                <div class="col-sm-10">
                                    {!!Form::text('Descripcion' ,$ContactoD,['class'=>'form-control'])!!}
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm(“¿Seguro que desea modificar?")'])!!}

                                </div>
                            </div>
                        {!! Form::close() !!}


                </div>
            </div>

        </div>
    </div>

@endsection

@section ('planteles')

<div class="col-lg-12">
    <div class="form-panel">
        <h4 class="mb"><i class="fa fa-angle-right"></i>Información planteles</h4>

        <div class="comment-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#crearUbicacion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                <li><a href="#actualizarUbicacion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                <li><a href="#borrarUbicacion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="crearUbicacion">
                    <br>

                    {!! Form::open(['action'=>['Contactanos@storeUbicacion'],'class'=>'form-horizontal style-form']  )  !!}

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Ubicación</label>
                        <div class="col-sm-10">
                            {!!Form::text('Ubicacion' ,null,['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            {!!Form::text('Descripcion' ,null,['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>

                <div class="tab-pane" id="actualizarUbicacion">

                    {!! Form::open(['action'=>['Contactanos@updateUbicacion'],'class'=>'form-horizontal style-form']  )  !!}
                    <br>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Plantel</label>
                        <div class="col-sm-10">
                            <select name="Seleccion" id="SeleccionPlantel" class="form-control">
                                <option value="">Selecciona una opcion</option>

                                @foreach($Planteles as $Plantel)
                                <option value="{{ $Plantel->id  }} " > {{ $Plantel->Ubicacion }}  </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Ubicación</label>
                        <div class="col-sm-10">
                            {!!Form::text('Ubicacion' ,null,['class'=>'form-control','id'=>'UbicacionPlantel'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            {!!Form::text('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionPlantel'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">

                            {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="borrarUbicacion">

                    <br>

                    {!! Form::open(['action'=>['Contactanos@deleteUbicacion'],'class'=>'form-horizontal style-form']  )  !!}


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Plantel</label>
                        <div class="col-sm-10">
                            <select name="Seleccion" class="form-control">
                                <option value="">Selecciona una opcion</option>

                                @foreach($Planteles as $Plantel)
                                <option value="{{ $Plantel->id  }} " > {{ $Plantel->Ubicacion }}  </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">

                            {!! Form::submit('Eliminar',['class'=>'btn btn-theme04','onclick'=>'return confirm(“¿Seguro que desea eliminar?")'])!!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection