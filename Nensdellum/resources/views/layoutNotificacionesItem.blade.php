<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Boletín | Nens de Llum</title>



    <!-- core CSS -->
    <link rel="stylesheet" href=" {{ asset('publicUsersTemplate/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/animate.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/prettyPhoto.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/main.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/responsive.css')  }}">

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
                    <div class="top-number"><p><i class="fa fa-phone-square fa-lg"></i> + {{$ContactoT }} </p></div>
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
                <a class="navbar-brand logo" href=" {{ route('home') }} "><img  src="{{ asset('publicUsersTemplate/images/logos/logoNens.png') }}" class= "logo" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbarAlign">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }} " class="active">Home</a></li>
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

                    <li><a href="{{ route('galeriayvideos') }} ">Galería y Videos</a></li>
                    <li><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                    <li ><a href="{{ route('boletin') }} ">Boletín</a></li>
                    <li><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->


<section id="blog" class="container">

        <div class="center">
            <h2>Notificaciones</h2>
            <p class="lead">Notificación</p>
        </div>



        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{ $Notificacion->URLImagen }}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date">{{ $Notificacion->updated_at}}</span>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>{{ $Notificacion->Titulo }}</h2>
                                    <p>{{ $Notificacion->Descripcion}}</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->

                </div><!--/.col-md-8-->



            </div><!--/.row-->



         </div><!--/.blog-->

    </section><!--/#blog-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Nens de Llum</a>. All Rights Reserved.
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
</body>
</html>