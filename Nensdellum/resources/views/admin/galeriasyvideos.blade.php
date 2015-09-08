@extends('admin.layoutGaleriaVideos')

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


@section('contentImagenes')
    @include('Mensajes.mensajes')

                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Imágenes</h4>


                                <div class="comment-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#crearImagen" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                                        <li><a href="#actualizarImagen" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                                        <li><a href="#borrarImagen" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="crearImagen">
                                            <br>
                                            {!! Form::open(['action'=>['GaleriaVideos@storeImagenes'],'class'=>'form-horizontal style-form']  )  !!}

                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Título</label>
                                                    <div class="col-sm-10">
                                                        {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                                                    <div class="col-sm-10">
                                                        {!!Form::text('Descripcion' ,null,['class'=>'form-control'])!!}
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                                                    <div class="col-sm-10 " >
                                                        <div class="input-group">
                                                            <div class="input-group-addon">http://</div>
                                                            {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagenI','onchange'=>'myFunction("URLImagenI","imagen1Image")'])!!}
                                                        </div>

                                                        <span class="help-block">Inserte la dirección url , enlace o link</span>
                                                    </div>

                                                    <br>

                                                <div id="imagen1Image" style="text-align:center;"></div>

                                            </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                                                    </div>
                                                </div>

                                            {!! Form::close() !!}

                                        </div>

                                        <div class="tab-pane" id="actualizarImagen">

                                            <br>

                                            {!! Form::open(['action'=>['GaleriaVideos@updateImagenes'],'class'=>'form-horizontal style-form']  )  !!}

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Título</label>
                                                <div class="col-sm-10">
                                                    <select name="Seleccion" id="galeriaImagenes" class="form-control">
                                                        <option value="">Selecciona una opción</option>

                                                        @foreach($galeriaImagenes as $galeriaImagen)
                                                        <option value="{{  $galeriaImagen->id  }} " > {{ $galeriaImagen->Titulo}}  </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Título</label>
                                                    <div class="col-sm-10">
                                                        {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloImagen'])!!}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                                                    <div class="col-sm-10">
                                                        {!!Form::text('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionImagen'])!!}
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                                                <div class="col-sm-10 " >
                                                    <div class="input-group">
                                                        <div class="input-group-addon">http://</div>
                                                        {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLImagenI1','onchange'=>'myFunction("URLImagenI1","imagen2Image")'])!!}
                                                    </div>
                                                    <span class="help-block">Inserte la dirección url , enlace o link</span>
                                                </div>
                                                <div id="imagen2Image" style="text-align:center;"></div>
                                            </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">

                                                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                                    </div>
                                                </div>
                                            {!! Form::close() !!}
                                        </div>


                                        <div class="tab-pane" id="borrarImagen">

                                            <br>

                                            {!! Form::open(['action'=>['GaleriaVideos@deleteImagenes'],'class'=>'form-horizontal style-form']  )  !!}

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Título</label>
                                                <div class="col-sm-10">
                                                    <select name="Seleccion" class="form-control">
                                                        <option value="">Selecciona una opción</option>

                                                        @foreach($galeriaImagenes as $galeriaImagen)
                                                        <option value="{{  $galeriaImagen->id  }} " > {{ $galeriaImagen->Titulo}}  </option>
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




@section('contentVideos')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Videos</h4>


            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#crearVideos" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#actualizarVideos" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#borrarVideos" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="crearVideos">
                        <br>

                        {!! Form::open(['action'=>['GaleriaVideos@storeVideos'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::text('Descripcion' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                            <div class="col-sm-10" >
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control'])!!}
                                </div>

                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>

                    <div class="tab-pane" id="actualizarVideos">

                        <br>

                        {!! Form::open(['action'=>['GaleriaVideos@updateVideos'],'class'=>'form-horizontal style-form']  )  !!}


                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Título</label>
                                    <div class="col-sm-10">
                                        <select name="Seleccion" class="form-control" id="galeriaVideos">
                                            <option value="">Selecciona una opción</option>

                                            @foreach($galeriaVideos as $galeriaVideo)
                                            <option value="{{  $galeriaVideo->id  }} " > {{ $galeriaVideo->Titulo}}  </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control', 'id' => 'TituloVideo'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::text('Descripcion' ,null,['class'=>'form-control','id' => 'DescripcionVideo'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                            <div class="col-sm-10 " >
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id' => 'URLVideo'])!!}
                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>


                    <div class="tab-pane" id="borrarVideos">

                        <br>

                        {!! Form::open(['action'=>['GaleriaVideos@deleteVideos'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="galeriaVideos">
                                    <option value="">Selecciona una opción</option>

                                    @foreach($galeriaVideos as $galeriaVideo)
                                    <option value="{{  $galeriaVideo->id  }} " > {{ $galeriaVideo->Titulo}}  </option>
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

@section('contentTestimonios')


    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Testimonios</h4>


            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#guardarTestimonios" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#actualizarTestimonios" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#borrarTestimonios" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="guardarTestimonios">
                        <br>
                        {!! Form::open(['action'=>['GaleriaVideos@storeTestimonios'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo',null,['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::text('Descripcion' ,null,['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                            <div class="col-sm-10 " >
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control'])!!}
                                </div>

                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>

                    <div class="tab-pane" id="actualizarTestimonios">

                        <br>

                        {!! Form::open(['action'=>['GaleriaVideos@updateTestimonios'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="galeriaTestimonios">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($galeriaTestimonios as $galeriaTestimonio)
                                    <option value="{{  $galeriaTestimonio->id  }} " > {{ $galeriaTestimonio->Titulo}}  </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloTestimonio'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::text('Descripcion' ,null,['class'=>'form-control', 'id'=>'DescripcionTestimonio'])!!}
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">URL, Enlace o Link:</label>
                            <div class="col-sm-10 " >
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>
                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'URLTestimonio'])!!}
                                </div>

                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>


                    <div class="tab-pane" id="borrarTestimonios">

                        <br>

                        {!! Form::open(['action'=>['GaleriaVideos@deleteTestimonios'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($galeriaTestimonios as $galeriaTestimonio)
                                    <option value="{{  $galeriaTestimonio->id  }} " > {{ $galeriaTestimonio->Titulo}}  </option>
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