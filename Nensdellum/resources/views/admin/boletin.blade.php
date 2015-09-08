@extends('admin.layoutBoletin')

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




@section('boletinArticulo')

    @include('Mensajes.mensajes')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Artículo del Boletín</h4>




            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logoutBoletin" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-commentBoletin" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settingsBoletin" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logoutBoletin">

                        <br>


                        {!! Form::open(['action'=>['Boletin@storeBoletin'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">

                                <label class="col-sm-2 col-sm-2 control-label">Título</label>
                                <div class="col-sm-10 ">
                                        {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Contenido</label>
                                <div class="col-sm-10">

                                    {!!Form::textarea('Descripcion' ,null ,['class'=>'form-control'])!!}
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Inserta URL de Imagen</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagenBoletin1','onchange'=>'myFunction("URLImagenBoletin1","imagen1Boletin")'])!!}
                                    </div>
                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                </div>
                                <div id="imagen1Boletin" style="text-align:center;"></div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}


                                </div>
                            </div>
                        {!! Form::close() !!}



                    </div>
                    <div class="tab-pane" id="add-commentBoletin">
                    <br>
                        {!! Form::open(['action'=>['Boletin@updateBoletin'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título de boletín</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" id="SeleccionBoletin" class="form-control">
                                    <option value="">Selecciona una opcion</option>

                                    @foreach($boletin as $boletins)
                                        <option value="{{ $boletins->id  }} " > {{ $boletins->Titulo }}  </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <br>


                            <div class="form-group">

                                <label class="col-sm-2 col-sm-2 control-label">Título</label>
                                <div class="col-sm-10 ">

                                        {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloBoletin'])!!}



                                </div>
                            </div>



                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Contenido</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionBoletin'])!!}

                                </div>

                            </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10 ">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagenBoletin2','onchange'=>'myFunction("URLImagenBoletin2","imagen2Boletin")'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                            </div>
                            <div id="imagen2Boletin" style="text-align:center;"></div>
                        </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                                </div>
                            </div>
                        {!! Form::close() !!}



                    </div>
                    <div class="tab-pane" id="account-settingsBoletin">

                        <br>

                        {!! Form::open(['action'=>['Boletin@deleteBoletin'],'class'=>'form-horizontal style-form']  )  !!}

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Seleccione un título</label>
                                <div class="col-sm-10">

                                    <select name="Seleccion" id="SeleccionBoletin" class="form-control">
                                        <option value="">Selecciona una opcion</option>

                                        @foreach($boletin as $boletins)
                                            <option value="{{ $boletins->id  }} " > {{ $boletins->Titulo }}  </option>
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

@section('enviarBoletin')


    <div class="col-lg-12">
        <div class="form-panel">




            <h4 class="mb"><i class="fa fa-angle-right"></i>Enviar Boletín</h4>

            <div class="three-quarters-loader"  id="cargandoEnviando">
                Cargando
            </div>

            {!! Form::open(['action'=>['Boletin@enviarBoletines'],'class'=>'form-horizontal style-form','id'=>'MandarMail']  )  !!}

            <div style="text-align: center">
                {!! Form::submit('Enviar',['class'=>'btn btn-success', 'style' => 'width:40%; height:25%','onclick'=>'return confirm("¿Seguro que desea enviar el boletín mensual?")'])!!}
            </div>


            <br>
            {!! Form::close() !!}



        </div>
    </div>
  @endsection