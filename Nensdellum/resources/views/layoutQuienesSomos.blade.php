<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>¿Quiénes somos? | Nens de Llum</title>

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

    <link rel="stylesheet" type="text/css"  href="{{ asset('publicUsersTemplate/css/colors/sky-blue.css')  }}" title="sky-blue" media="screen" />

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
                            <li><a href=" {{ route('quienessomos') }} ">¿Quiénes somos?</a></li>
                            <li><a href=" {{ route('quienessomos') }} ">Misión y Visión</a></li>
                            <li><a href=" {{ route('quienessomos') }} ">Valores</a></li>
                            <li><a href=" {{ route('quienessomos') }} ">Filosofía institucional</a></li>
                            <li><a href=" {{ route('quienessomos') }} ">Perfil de pacientes</a></li>
                            <li><a href="{{ route('quienessomos') }} ">Programas</a></li>

                        </ul>
                    </li>

                    <li><a href="{{ route('galeriayvideos') }} ">Galería y Videos</a></li>
                    <li><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                    <li><a href="{{ route('boletin') }} ">Boletín</a></li>
                    <li><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->


</header><!--/header-->


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="QuienesSomos">

    <div class="container">
        <div class="center wow fadeInDown">
            <h2 style="color:#4FCADC">¿Quiénes somos?</h2>
            <br>
            <p class="lead alingCenter">{{$quienesSomos}}</p>
        </div>
    </div>

    <!-- Evolucion -->
    <div  id="about">
        <div class="row evolucion">
            <div class=" about_text">
                <div class="center wow fadeInDown">
                    <h2 style="color:#FFFFFF">Evolución</h2>
                    <p class="lead">{{$MensajeEvolucion}}</strong></p>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="col-lg-12">
                <ul class="timeline">

            {{--*/ $x = 1 /*--}}
             @foreach ($evoluciones as $evolucion)

              @if($x % 2 != 0)
                    <li>
                        <div class="timeline-image">
                            <img id="rotate" class="img-circle img-responsive" src="{{ $evolucion->URLImagen }}" alt="">
                        </div>
              @else
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img id="rotate2" class="img-circle img-responsive" src="{{ $evolucion->URLImagen }}" alt="">
                        </div>
              @endif
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $evolucion->Titulo }}</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">{{ $evolucion->Descripcion}}</p>
                            </div>
                        </div>
                    </li>
              {{--*/ $x = $x + 1 /*--}}
              @endforeach

                </ul>
            </div>
        </div>
    </div><!--/ Evolucion-->
</section>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="MisionVision">


    <div  id="about">
        <div class="row misionVision">
            <div class="about_text">
                <div class="center wow fadeInDown">
                    <h2 style="color: #FFFFFF">Misión y Visión</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- MISION-->

    <div class="main_bg"  id="about">
        <div class="container">
            <div class="row about">
                <div class="about_text">
                    <div style="text-align:left"  class="center wow fadeInDown">
                        <h2 style="color: #DD7AAF">Misión</h2>
                        <p class="lead">{{ $Mision }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- VISION-->

    <div class="main_bg"  id="about">
        <div class="container">
            <div class="row about">
                <div class=" about_text">
                    <div style="text-align:right" class="center wow fadeInDown">
                        <h2 style="color: #DD7AAF">Visión</h2>
                        <p class="lead">{{ $Vision}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<section id="Valores">
    <div class="container" id="rowColor">
        <div class="center" style="margin-top:5%;">
            <h2 style="color: #76C579; ">Valores</h2>
            <p class="lead">{{$MensajeValores}}</p>
        </div>
        <div>
            <div id="tabla" style="margin-bottom:5%;">
                <div id="fila">


                    {{--*/ $j = 1 /*--}}
                    @foreach ($valores as $valor)
                    <div class="wow fadeInDown hvr-grow valor{{$j}}" id="celda" >
                        <div id ="titleV" class="textProperty lead">
                            <h1 id ="titleV">{{$valor->Titulo}}</h1><br><br>
                            <p>{{$valor->Descripcion}}</p>
                        </div>
                    </div>
                    {{--*/ $j = $j + 1 /*--}}
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="Filosofia">

    <div class="main_bg"  id="about">
        <div class="row filosofia">
            <div class=" about_text">
                <div style="text-align:center" class="center wow fadeInDown">
                    <h1 style="color: #FFFFFF;">Filosofía institucional</h1>
                    <p class="lead">{{$MensajeFilosofia}}</p>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align:center; margin-top:8%;" class="center wow fadeInDown">
        <h2 class="lead" style="color: #BDBDBD !important">¿Porqué es importante que exista este centro?</h2>
    </div>

    <div id="content" style="margin-top:3%;">
        <div class="container">
            <!-- Start Services Icons -->
            <div id="tabla">

                <div id="fila">


                    {{--*/ $i = 1 /*--}}
                    @foreach($filosofias as $filosofia)
                    <!-- Start Service Icon 1 -->
                    <div class="service-box service-center" id="celdaf">
                        <div class="service-icon" style="margin-top:-25px;">
                            <i class="{{$filosofia->Glyph}} icon-medium-effect icon-effect-2"></i>
                        </div><br>
                        <div class="service-content">
                            <p>{{$filosofia->Descripcion}}</p>
                        </div>
                    </div>
                    <div class="borde"></div>
                    @if( $i > 2 )
                    {{--*/ $i = 0 /*--}}
                    </div>
                    <div class="borde"></div>
                         <div id="fila">
                    @endif
                    {{--*/ $i = $i + 1 /*--}}
                    @endforeach

                    </div>
                 </div>
               </div>
            </div>
</section>



<section id="Perfil">

    <div  id="about">
        <div class="row perfil">
            <div class="about_text">
                <div class="center wow fadeInDown">
                    <h2 style="color: #FFFFFF">Perfil de pacientes</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="Perfil">
        <br>
        <br>
        <div class=" about_text" >
            <div style="text-align:center;" class="center wow fadeInDown lead">
                <p>{{$MensajePacientes}}  </p><br>

                <p><strong><h2  style="color: #76C579">Causas</h2></strong>

                <div class="list-group">

                    @foreach ($Causas as $causa)

                    <li class="list-group-item"> {{ $causa->Texto }} </li>

                    @endforeach

                </div>

                </p><br><br>

                <p style="display:right">{{ $MensajeCausas }}<p>
            </div>
        </div>
    </div>

</section>

<section>

    <div  id="about">
        <div class="row programas">
            <div class="about_text">
                <div class="center wow fadeInDown">
                    <h2 style="color: #FFFFFF">Programas</h2>
                    <p class="lead">{{$programasMensaje }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container wow fadeInDown hvr-grow">
        <br>
        <br>

        <div id="tabla">
        <div id="fila" style="text-align:center">
            {{--*/ $i = 1 /*--}}
                @foreach ($programas as $programa)
                @if($i < 4)
                <div class="blockquote-box  blockquote-primary clearfix" id="celdaLogros">
                    <div class="pull-left">
                        <span class=" star fa fa-star fa-3x" id="rotate"></span>
                    </div>
                    <br>
                    <p class="lead">{{ $programa->Texto }}</p>
                </div>
                @else
                </div>
                    <div id="fila" style="text-align:center">
                  {{--*/ $i = 0 /*--}}
                @endif
            {{--*/ $i = $i + 1 /*--}}
            @endforeach
        </div>
       </div>
    </div>
</section>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2015 <a>Nens de Llum</a>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer><!--/#footer-->


<script src="publicUsersTemplate/js/jquery.js"></script>
<script src="publicUsersTemplate/js/bootstrap.min.js"></script>
<script src="publicUsersTemplate/js/jquery.prettyPhoto.js"></script>
<script src="publicUsersTemplate/js/jquery.isotope.min.js"></script>
<script src="publicUsersTemplate/js/main.js"></script>
<script src="publicUsersTemplate/js/wow.min.js"></script>
</body>
</html>