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
                    <div class="top-number"><p><i class="fa fa-phone-square"></i>  +442 212 24 59</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul  class="social-share">

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
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
                            <li><a href=" {{ route('quienessomos') }} ">Programas</a></li>
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



    <section id="error" class="container text-center">
        <h1>404, Pagina no encontrada</h1>
        <p>La pagina que buscas no existe</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
    </section><!--/#error-->


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