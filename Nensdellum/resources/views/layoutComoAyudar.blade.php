<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>¿Cómo Ayudar?| Nens de Llum</title>

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
                        <li><a href="{{ route('home') }} ">Home</a></li>
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
                        <li class="active"><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                        <li><a href="{{ route('boletin') }} ">Boletín</a></li>
                        <li><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->



<section id="portfolio">
        <div class="container wow fadeInDown">
            <div class="center">

            <br>
                    <h2>¿Cómo Ayudar?</h2><br>
                
                    <blockquote>
                      <p>{{$MensajeComoAyudar }}</p>
                    </blockquote>

                    <br>
                    <br>
                    <br>

        <div id="tabla">
            <div id="fila">
                    <div class="service-box service-center" id="celdaComoAyudar">
                       
                        <div class="box-icon">
                            <span class="fa fa-4x fa fa-users"></span>
                        </div>


                          <h2 class="text-center">Voluntariado</h2>
                          <br>
                                <div class="service-content lead">
                                  <p>{{ $MensajeVoluntariado}}</p>
                                </div>
                    </div>

                        <br>
                        <div class="borde"></div>
                        <br>

                     <div class="service-box service-center" id="celdaComoAyudar">
                         <div class="box-icon">
                             <span class="fa fa-4x fa-money"></span>
                        </div>
                        
                         <h2 class="text-center">Efectivo</h2>
                         <br>

                        <div class="service-content lead">
                           <p>{{ $MensajeEfectivo}}</p>
                             <br>
                        </div>
                     </div>
            </div>
        </div>
          </div>
                <br>
              <div style="text-align:center">
                    <a href="https://www.aporta.org.mx" target="_blank"><button type="button" class="btn botn botn-primary botn-lg raised">Dona con Aporta</button></a>
              </div>
        </div>
</section>


<section id="feature">
        <div class="container">
            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
                <h2>Difunde y Asiste</h2>

                    <br>

                    <p class="lead">{{$MensajeDifundiryAsistir}}</p>

                    <br><br>

                @foreach($redessociales as $redsocial)
                <a target="_blank" href="{{ $redsocial->URLPagina }}" class="icon-button {{ $redsocial->Titulo }} "><i class="{{$redsocial->Glyph}} fa-3x"></i><span></span></a>
                @endforeach

            </div>
        </div>
</section>


<section id="portfolio2" class="transparent-bg">

    <div class="container">
        <div class="row">


            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
                <h2>Nuestros Donadores</h2>
                <p class="lead">{{ $MensajeDonadores }}</p>
            </div>

        <div class="col-md-12">

                <div id="Carousel" class="carouselD carousel slide">

                <!-- Carousel items -->
                <div class="carousel-inner">
                          <div class="item active">
                              <div class="row">
                  {{--*/ $i = 1  /*--}}
                  {{--*/ $elementos = count($ImagenDonadores)  /*--}}

                  @foreach($ImagenDonadores as $ImagenDonador)
                                <div class="col-md-3"><a  class="thumbnail img-responsive">
                                   <img src="{{ $ImagenDonador->URLImagen }}" alt="Imagen" style="max-width:100%;">
                                    </a>
                                </div>
                  @if($i > 3 && $elementos > 1)
                                </div>
                          </div>
                    <div class="item">
                        <div class="row">

                  {{--*/ $i = 0  /*--}}
                  @endif
                    {{--*/ $i = $i + 1  /*--}}
                    {{--*/ $elementos = $elementos - 1  /*--}}
                 @endforeach
                  </div></div>
                   </div>

                          <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                          <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
            </div><!--.Carousel-->  
        </div>
    </div>
  </div><!--.container-->
</section>


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Nens de Llum</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
     
     $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    
    })});
    
    </script>


    <script src="publicUsersTemplate/js/jquery.js"></script>
    <script src="publicUsersTemplate/js/bootstrap.min.js"></script>
    <script src="publicUsersTemplate/js/jquery.prettyPhoto.js"></script>
    <script src="publicUsersTemplate/js/jquery.isotope.min.js"></script>
    <script src="publicUsersTemplate/js/main.js"></script>
    <script src="publicUsersTemplate/js/wow.min.js"></script>

 </body>
</html>