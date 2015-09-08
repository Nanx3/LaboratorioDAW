<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- core CSS -->
    <link rel="stylesheet" href="publicUsersTemplate/css/bootstrap.min.css">
    <link rel="stylesheet" href="publicUsersTemplate/css/main.css">
</head><!--/head-->

<body class="homepage">

<header id="header">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                    <br>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand logo" href="{{ route('home') }} ">
                    <img src="{{ $message->embed(asset('publicUsersTemplate/images/logos/logoNens.png')) }}">


                </a>
            </div>


        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->



<div class="center">

    <h1> Hola {{  $correos  }} te enviamos el boletín mensual de Nens de Llum</h1>

</div>


        <div class="col-md-8">

            @foreach($boletinesEnviar as $boletinItem)
            <div class="blog-item">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 text-center">


                        <div class="entry-meta">
                            <span id="publish_date">{{ $boletinItem->updated_at}}</span>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 blog-content">
                        <h2>{{ $boletinItem->Titulo }}</h2>
                        <p class="lead"> {{  $boletinItem->Descripcion }}</p>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach



    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   <a>Nens de Llum</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>