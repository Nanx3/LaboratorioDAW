<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Galería y Videos | Nens de Llum</title>


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
                    <li><a href=" {{ route('home') }} ">Home</a></li>
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

                    <li  class="active"><a href=" {{ route('galeriayvideos') }} ">Galería y Videos</a></li>
                    <li><a href="{{ route('comoayudar') }} ">¿Cómo ayudar?</a></li>
                    <li><a href="{{ route('boletin') }} ">Boletín</a></li>
                    <li><a href="{{ route('contactanos') }} ">Contáctanos</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

<section id="portfolio">
<div class="container">
    <div class="center">
        <h2>Galería y Videos</h2>
    </div>




    {!! Form::open(['route' => 'galeriavideosBuscar' ,'method'=>'GET']) !!}
    <div class="col-lg-6">
        <div class="input-group">
                 {!! Form::text('buscador', null, ['class' => 'form-control','placeholder'=>'Buscar']) !!}
                <span class="input-group-btn">
                       {!! Form::submit('Buscar',['class'=>'btn btn-default']) !!}
                </span>

        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    {!! Form::close() !!}






    <ul class="portfolio-filter text-center">
        <li><a class="btn btn-default active" href="#" data-filter="*">Todo</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".Testimonios">Testimonios</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".Imagenes">Imagenes</a></li>
        <li><a class="btn btn-default" href="#" data-filter=".Videos">Videos</a></li>



    </ul><!--/#portfolio-filter-->

    <div class="row">



        <div class="portfolio-items">
            @foreach($galeriaItems as $galeriaItem)

            <div class="portfolio-item  {{ $galeriaItem->Tipo }} apps col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" style="height: 270px" src="{{$galeriaItem->URLImagen }}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">{{$galeriaItem->Titulo }}</a></h3>
                            <p>{{$galeriaItem->Descripcion }}</p>
                            <a class="preview" href="{{$galeriaItem->URLImagen }}" rel="prettyPhoto"><i class="fa fa-eye"></i>Ver ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>


</div>

<div class="container text-center">
    {!! $galeriaItems->setPath('')->render()!!}

</div>

</section><!--/#portfolio-item-->


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
