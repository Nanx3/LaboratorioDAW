@extends('admin.layoutQuienesSomos')

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

@section('quienesSomos')

    @include('Mensajes.mensajes')

        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i>Contenido en ¿Quiénes Sómos? </h4>

                {!! Form::open(['action'=>['QuienesSomos@updateMensajeQuienesSomos'],'class'=>'form-horizontal style-form']  )  !!}


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Mensaje</label>
                        <div class="col-sm-10">
                            {!!Form::textarea('Texto' ,$quienesSomos,['class'=>'form-control'])!!}

                        </div>

                    </div>

                      {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                {!! Form::close() !!}



            </div>
        </div>

@endsection


@section('evolucion')

    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Contenido en Evolución </h4>

            {!! Form::open(['action'=>['QuienesSomos@updateMensajeEvolucion'],'class'=>'form-horizontal style-form']  )  !!}


            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Mensaje</label>
                <div class="col-sm-10">
                    {!!Form::textarea('Texto' ,$MensajeEvolucion,['class'=>'form-control'])!!}

                </div>
            </div>


            {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


            {!! Form::close() !!}
            <br><br>


            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#crearEvolucion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#actualizarEvolucion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#borrarEvolucion" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="crearEvolucion">

                        <br>
                        {!! Form::open(['action'=>['QuienesSomos@storeEvolucionLista'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título de evolución</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloEvolucion'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionEvolucion'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>

                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'ImagenEvolucion','onchange'=>'myFunction("ImagenEvolucion","imagen1QuienesSomos")'])!!}

                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen1QuienesSomos" style="text-align:center;"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">


                                {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}


                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>

                    <div class="tab-pane" id="actualizarEvolucion">
                        <br>
                        {!! Form::open(['action'=>['QuienesSomos@updateEvolucionLista'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionEvolucion">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($evoluciones as  $evolucion)
                                    <option value="{{ $evolucion->id  }} " > {{ $evolucion->Titulo}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Título de evolución</label>
                            <div class="col-sm-10">
                                {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'Titulo'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-10">
                                {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'Descripcion'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="uploadMedia" class="col-sm-2 control-label">Inserta URL de Imagen</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">http://</div>

                                    {!!Form::text('URLImagen' ,null,['class'=>'form-control','id'=>'ImagenEvolucion2','onchange'=>'myFunction("ImagenEvolucion2","imagen2QuienesSomos")'])!!}

                                </div>
                                <span class="help-block">Inserte la dirección url , enlace o link</span>
                                <div id="imagen2QuienesSomos" style="text-align:center;"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">


                                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    <div class="tab-pane" id="borrarEvolucion">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@deleteEvolucionLista'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($evoluciones as  $evolucion)
                                    <option value="{{ $evolucion->id  }} " > {{ $evolucion->Titulo}}  </option>
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




@section('misionyvision')



    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Misión y Visión </h4>


            {!! Form::open(['action'=>['QuienesSomos@updateMensajeMision'],'class'=>'form-horizontal style-form']  )  !!}


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Misión</label>
                        <div class="col-sm-10">
                            {!!Form::textarea('Texto' ,$Mision,['class'=>'form-control'])!!}
                            <span class="help-block">Inserte el contenido</span>
                        </div>

                    </div>

                 {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


            {!! Form::close() !!}


            <br>

            {!! Form::open(['action'=>['QuienesSomos@updateMensajeVision'],'class'=>'form-horizontal style-form']  )  !!}


            <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Visión</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$Vision,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

            </div>

                  {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

            {!! Form::close() !!}


        </div>
    </div>



@endsection



@section('valores')



    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Valores</h4>

            {!! Form::open(['action'=>['QuienesSomos@updateMensajeValores'],'class'=>'form-horizontal style-form']  )  !!}

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$ValoresMensaje ,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>

                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


            {!! Form::close() !!}



            <br><br>


            {!! Form::open(['action'=>['QuienesSomos@updateValoresLista'],'class'=>'form-horizontal style-form']  )  !!}


            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Valor</label>
                <div class="col-sm-10">
                    <select name="Seleccion" class="form-control" id="SeleccionValores">
                        <option value="">Selecciona una opción</option>
                        @foreach($valoresLista as  $valor)
                        <option value="{{ $valor->id  }} " > {{ $valor->Titulo}}  </option>
                        @endforeach
                    </select>
                </div>
            </div>



                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Título de Valor</label>
                    <div class="col-sm-10">
                        {!!Form::text('Titulo' ,null,['class'=>'form-control','id'=>'TituloValores'])!!}
                    </div>
                </div>



                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Descripción</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionValores'])!!}
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">


                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                    </div>
                </div>
            {!! Form::close() !!}


        </div>
    </div>



@endsection

@section('filosofiainstitucional')


    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Filosofía Institucional</h4>

            {!! Form::open(['action'=>['QuienesSomos@updateMensajeFilosofia'],'class'=>'form-horizontal style-form']  )  !!}


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$MensajeFilosofia,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>

                {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


            {!! Form::close() !!}

            <br><br>


            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logoutfilosofia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-commentfilosofia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settingsfilosofia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logoutfilosofia">

                        <br>



                        {!! Form::open(['action'=>['QuienesSomos@storeFilosofia'],'class'=>'form-horizontal style-form']  )  !!}


                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Descripción de filosofía</label>
                                <div class="col-sm-10">
                                    {!!Form::text('Descripcion' ,null,['class'=>'form-control'])!!}
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Icono</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-addon">fa fa-icon</div>
                                        {!!Form::text('Icono' ,null,['class'=>'form-control'])!!}

                                    </div>
                                    <span class="help-block">Inserta el icono de tu preferencia (<a href="http://fortawesome.github.io/Font-Awesome/icons/">http://fortawesome.github.io/Font-Awesome/icons/</a>)</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}
                                </div>
                            </div>
                        {!! Form::close() !!}



                    </div>
                    <div class="tab-pane" id="add-commentfilosofia">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@updateFilosofia'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionFilosofia">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($FilosofiasLista as  $Filosofia)
                                    <option value="{{ $Filosofia->id  }} " > {{ $Filosofia->Descripcion}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Descripción de filosofía</label>
                                <div class="col-sm-10">
                                    {!!Form::text('Descripcion' ,null,['class'=>'form-control','id'=>'DescripcionFilosofia'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Icono</label>
                                <div class="col-sm-10">

                                    <div class="input-group">
                                        <div class="input-group-addon">fa fa-icon</div>
                                        {!!Form::text('Icono' ,null,['class'=>'form-control','id'=>'GlyphFilosofia'])!!}

                                    </div>
                                    <span class="help-block">Inserta el icono de tu preferencia (<a href="http://fortawesome.github.io/Font-Awesome/icons/">http://fortawesome.github.io/Font-Awesome/icons/</a>)</span>


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">


                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}



                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="account-settingsfilosofia">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@deleteFilosofia'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="SeleccionFilosofia">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($FilosofiasLista as  $Filosofia)
                                    <option value="{{ $Filosofia->id  }} " > {{ $Filosofia->Descripcion}}  </option>
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



@section('perfilpacientes')


    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Perfil de Pacientes</h4>


            {!! Form::open(['action'=>['QuienesSomos@updateMensajePerfilPacientes'],'class'=>'form-horizontal style-form']  )  !!}



                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$MensajePacientes,['class'=>'form-control'])!!}

                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>



                  {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

            {!! Form::close() !!}


            <br>

            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logoutCausas" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-commentCausas" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settingsCausas" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logoutCausas">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@storeCausas'],'class'=>'form-horizontal style-form']  )  !!}



                            <div class="form-group">

                                <label for="email" class="col-sm-2 control-label">Texto de la causa</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Texto' ,null,['class'=>'form-control'])!!}

                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}



                                </div>
                            </div>
                        {!! Form::close() !!}



                    </div>
                    <div class="tab-pane" id="add-commentCausas">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@updateCausas'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Causa</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="CausasSeleccion">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($CausasLista as $Causa)
                                    <option value="{{ $Causa->id  }} " > {{ $Causa->Texto}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Texto de la causa</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Texto' ,null,['class'=>'form-control','id'=>'TextoCausas'])!!}

                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}

                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="account-settingsCausas">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@deleteCausas'],'class'=>'form-horizontal style-form']  )  !!}



                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Causa</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($CausasLista as $Causa)
                                    <option value="{{ $Causa->id  }} " > {{ $Causa->Texto}}  </option>
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


            {!! Form::open(['action'=>['QuienesSomos@updateCausasMensaje'],'class'=>'form-horizontal style-form']  )  !!}


                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$CausasMensaje,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                    </div>
                </div>


            {!! Form::close() !!}

        </div>
    </div>



@endsection


@section('terapias')


    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Programas</h4>

            {!! Form::open(['action'=>['QuienesSomos@updateMensajeProgramas'],'class'=>'form-horizontal style-form']  )  !!}




                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-10">
                        {!!Form::textarea('Texto' ,$programasMensaje,['class'=>'form-control'])!!}
                        <span class="help-block">Inserte el contenido</span>
                    </div>

                </div>
               {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


            {!! Form::close() !!}


            <br>

            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logoutTerapia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir</h4></a></li>
                    <li><a href="#add-commentTerapia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Modificar</h4></a></li>
                    <li><a href="#account-settingsTerapia" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Eliminar</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logoutTerapia">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@storeProgramas'],'class'=>'form-horizontal style-form']  )  !!}



                            <div class="form-group">

                                <label for="email" class="col-sm-2 control-label">Texto del programa</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Texto' ,null,['class'=>'form-control'])!!}
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme'])!!}

                                </div>
                            </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="tab-pane" id="add-commentTerapia">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@updateProgramas'],'class'=>'form-horizontal style-form']  )  !!}


                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Programa</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control" id="ProgramasSeleccion">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($programasLista as $Programa)
                                    <option value="{{ $Programa->id  }} " > {{ $Programa->Texto}}  </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Texto del programa</label>
                                <div class="col-sm-10">
                                    {!!Form::textarea('Texto' ,null,['class'=>'form-control','id'=>'TextoProgramas'])!!}

                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">

                                    {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm("¿Seguro que desea modificar?")'])!!}


                                </div>
                            </div>


                        {!! Form::close() !!}
                    </div>
                    <div class="tab-pane" id="account-settingsTerapia">

                        <br>

                        {!! Form::open(['action'=>['QuienesSomos@deleteProgramas'],'class'=>'form-horizontal style-form']  )  !!}

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Programa</label>
                            <div class="col-sm-10">
                                <select name="Seleccion" class="form-control">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($programasLista as $Programa)
                                    <option value="{{ $Programa->id  }} " > {{ $Programa->Texto}}  </option>
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