<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Nens de Llum</title>


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
                    <li  class="active" ><a href=" {{ route('home') }} ">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Quiénes somos?<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href=" {{ route('quienessomos') }} ">¿Quiénes somos?</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Misión y Visión</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Valores</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Filosofía institucional</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Perfil de pacientes</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Programas</a></li>

                        </ul>
                    </li>

                    <li><a href=" {{ route('galeriayvideos') }} ">Galería y Videos</a></li>
                    <li><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                    <li><a href="{{ route('boletin') }} ">Boletín</a></li>
                    <li><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">


            <div class="item" style=" background-image: url('{{ $Imagen1  }}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">


                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!--  <img src="images/slider/img1.png" class="img-responsive"> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->


            <div class="item" style=" background-image: url('{{ $Imagen2  }}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">


                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!--  <img src="images/slider/img2.png" class="img-responsive"> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style=" background-image: url('{{ $Imagen3  }}')">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">


                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!-- <img src="images/slider/img3.png" class="img-responsive"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Bienvenidos</h2>
            <p class="lead">{{ $bienvenidos }}</p>
        </div>

    </div><!--/.container-->
</section><!--/#feature-->



<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Logros</h2>
        </div>

<div id="tabla">
        <div id="fila">

            {{--*/ $j = 1 /*--}}
            @foreach ($logros as $logro)

            <div class="services-wrap" id="celdaLogros">
                <div class="media wow fadeInDown">
                    <div>
                        <img class="img-responsive"  src="{{ $logro->URLImagen }}" />
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ $logro->Titulo }}</h3>
                        <p>{{$logro->Descripcion}}</p>
                    </div>
                </div>
            </div>

            <div id="celdaDivision"></div>
            @if($j > 2)
                </div>
                    <div id="celdaDivision"></div>
                        <div id="fila">
                          {{--*/ $j = 0 /*--}}
            @endif
                 {{--*/ $j = $j + 1 /*--}}
            @endforeach
                 </div>
             </div>
    </div><!--/.container-->
</section><!--/#services-->


<section id="Noticias">
    <div class="container">
        <div class="row">

            {{--*/ $i = 1 /*--}}
            @foreach ($notificaciones as $notificacion)

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <p class="panel-title">{{ $notificacion->updated_at }}</p>
                    </div>

                    <div class="panel-body">


                        @if($i % 2 != 0)
                            <div class="col-md-4 wow fadeInDown">
                                <div class="img-responsive">
                                    <img width="200" height="200" class="anuncio"  src="{{ $notificacion->URLImagen }}" />
                                </div>
                            </div>

                            <div class="col-md-8 wow fadeInDown">

                                <div class=" about_text">
                                    <div class="center wow fadeInDown">
                                        <h1 style="color:#428BCA">{{ $notificacion->Titulo }}</h1>
                                    </div>
                                </div>

                                <p>{{ $notificacion->Descripcion }} </p>
                                <!-- Contextual button for informational alert messages -->
                                <a  href="{{ route('notificacionesItem',$notificacion->id) }}">
                                    <button type="button" class="btn btn-info">Leer más </button>
                                </a>
                            </div>

                        @else
                            <div class="col-md-8 wow fadeInDown">

                                <div class=" about_text">
                                    <div class="center wow fadeInDown">
                                        <h1 style="color:#428BCA">{{ $notificacion->Titulo }}</h1>
                                    </div>
                                </div>

                                <p>{{ $notificacion->Descripcion }} </p>
                                <!-- Contextual button for informational alert messages -->
                                <a  href="{{ route('notificacionesItem',$notificacion->id) }}">
                                    <button type="button" class="btn btn-info">Leer más </button>
                                </a>
                            </div>

                            <div class="col-md-4 wow fadeInDown">
                                <div class="img-responsive">
                                    <img width="200" height="200" class="anuncio"  src="{{ $notificacion->URLImagen }}" />
                                </div>
                            </div>
                        @endif
                        {{--*/ $i = $i + 1 /*--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Colaboradores</h2>
        </div>

        <div class="center wow fadeInDow">

            <div id="tabla">
                <div id="fila">

            {{--*/ $i = 1 /*--}}
            @foreach ($colaboradores as $colaborador)
                    <div id="celdaLogros">
                        <p>{{$colaborador->Titulo}}<br>{{$colaborador->Descripcion}}</p>
                    </div>
                    <div id="celdaDivision"></div>

            @if($i > 2)
               </div>
                <div id="celdaDivision"></div>
                    <div id="fila">
                       {{--*/ $i = 0 /*--}}
           @endif
                       {{--*/ $i = $i + 1 /*--}}
           @endforeach
                 </div>
             </div>

        </div>
    </div><!--/.container-->
</section><!--/#partner-->

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
<script type='text/javascript'>
    $(document).ready(function() {
        $('.carousel-inner').carousel({
            interval: 2000
        })
    });
</script>
</body>
</html>