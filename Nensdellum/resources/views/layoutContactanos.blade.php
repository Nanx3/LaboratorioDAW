<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contáctanos | Nens de Llum</title>


    <!-- core CSS -->
    <link rel="stylesheet" href="publicUsersTemplate/css/bootstrap.min.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/font-awesome.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/font-awesome.min.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/animate.min.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/prettyPhoto.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/main.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/responsive.css">
    <!--[if lt IE 9]>

    <script  src="publicUsersTemplate/js/html5shiv.js"></script>
    <script src="publicUsersTemplate/js/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">

</head><!--/head-->

<body class="homepage">

    <header id="header">


        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square fa-lg"></i> + {{ $ContactoT }} </p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                        <div class="social">
                            <ul class="social-share">

                                @foreach($redessociales as $redsocial)
                                <li><li><a target="_blank" href="{{ $redsocial->URLPagina }}"><i class="{{$redsocial->Glyph}}"></i></a></li></li>
                                @endforeach

                            </ul>
                            <div class="search">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="{{ route('home') }} "><img  src="{{ asset('publicUsersTemplate/images/logos/logoNens.png') }}" class= "logo" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbarAlign">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }} ">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Quiénes somos?<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('quienessomos') }} ">¿Quiénes somos?</a></li>
                                <li><a href="{{ route('quienessomos') }} ">Misión y Visión</a></li>
                                <li><a href="{{ route('quienessomos') }} ">Valores</a></li>
                                <li><a href="{{ route('quienessomos') }} ">Filosofía institucional</a></li>
                                <li><a href="{{ route('quienessomos') }} ">Perfil de pacientes</a></li>
                                <li><a href="{{ route('quienessomos') }} ">Programas</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('galeriayvideos') }} ">Galería y Videos</a></li>
                        <li><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                        <li><a href="{{ route('boletin') }} ">Boletín</a></li>
                        <li class="active"><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    @include('Mensajes.mensajes')



    <section id="contact-info">
        <div class="center">                
            <h2>¿Cómo encontrarnos?</h2>
        </div>
        <div class="gmap-area">
            <div class="container" style="text-align: center">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="">{{ $ContactoURL }}</iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content " style="text-align:center">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h1 style="color:gray">Centro Nens de Llum</h1>
                                    <h2>{{ $ContactoU  }}</h2>
                                    <p>{{  $ContactoD }} </p>
                                    <p><span><i class="fa fa-phone fa-lg"></i></span>+ {{ $ContactoT }} </p>
                                </address>
                            </li>
                         </ul>
                     </div>

                             <div id="tabla" style="width: 50%">
                                 <div id="fila">
                                     {{--*/ $i = 1  /*--}}
                                     @foreach($Planteles as $Plantel)
                                     <div id="celdaLogros">
                                         <address>
                                             <h3><strong>{{ $Plantel->Ubicacion  }}</strong></h3>
                                             <p>{{  $Plantel->Descripcion }} </p>
                                         </address>
                                     </div>
                                     @if($i > 2)
                                     </div>
                                         <div id="fila">
                                             {{--*/ $i = 0  /*--}}
                                     @endif
                                             {{--*/ $i = $i + 1  /*--}}
                                     @endforeach
                                   </div>
                                </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">

            <div class="three-quarters-loader" id="cargandoEnviando">
                Cargando
            </div>

            <div class="center">


                <h2>Deja tu mensaje</h2>
                <p class="lead">Para más información contáctanos</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>

               {!! Form::open(array('action' => 'contactanosUsersPublicController@mandarEmail', 'class'=>'contact-form','id'=>'MandarMail')) !!}

                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre *</label>
                            {!!Form::text('nombre' ,null ,['class'=>'form-control','required'=>'required'])!!}
                        </div>
                        <div class="form-group">
                            <label>E-mail *</label>
                            {!!Form::email('email' ,null ,['class'=>'form-control','required'=>'required'])!!}

                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            {!!Form::text('telefono' ,null ,['class'=>'form-control'])!!}

                        </div>
                        <div class="form-group">
                            <label>Nombre de compañía</label>
                            {!!Form::text('nombreCompañia' ,null ,['class'=>'form-control'])!!}

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Asunto *</label>
                            {!!Form::text('asunto' ,null ,['class'=>'form-control','required'=>'required'])!!}
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            {!!Form::textarea('mensaje' ,null ,['class'=>'form-control','required'=>'required'])!!}
                        </div>                        
                        <div class="form-group">
                            {!! Form::submit('Enviar mensaje',['class'=>'btn btn-primary btn-lg','id'=>'EnviarMensaje','onclick'=>'return confirm("¿Seguro que desea enviar el mensaje?")'])!!}

                        </div>
                    </div>
                {!! Form::close() !!}
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->




    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a>Nens de Llum</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>


    <script src="publicUsersTemplate/js/jquery.js"></script>
    <script src="publicUsersTemplate/js/bootstrap.min.js"></script>
    <script src="publicUsersTemplate/js/jquery.prettyPhoto.js"></script>
    <script src="publicUsersTemplate/js/jquery.isotope.min.js"></script>
    <script src="publicUsersTemplate/js/main.js"></script>
    <script src="publicUsersTemplate/js/wow.min.js"></script>


    <script>
        $(document).ready(function(){

            $('#cargandoEnviando').hide(); //muestro mediante id

            $("#MandarMail").submit(function() {

                $('#cargandoEnviando').show(); //muestro mediante id

            });

        });



    </script>


</body>
</html>