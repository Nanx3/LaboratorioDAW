@extends('admin.layoutAjustes')

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



@section('modificar')
@include('Mensajes.mensajes')

<div class="form-panel">
    <h4 class="mb"><i class="fa fa-angle-right"></i>Contraseña</h4>

    <div style="text-align: center">
    {!! Form::open(['action'=>['ContrasenaController@cambiarContrasena'],'class'=>'form-horizontal style-form'])!!}

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Contraseña actual</label>
        <div class="col-sm-8">
            {!!Form::password('contrasenaActual' ,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Contraseña nueva</label>
        <div class="col-sm-8">
            {!!Form::password('contrasena' ,['class'=>'form-control'])!!}
        </div>
    </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Contraseña nueva</label>
            <div class="col-sm-8">
                {!!Form::password('contrasena_confirmation' ,['class'=>'form-control'])!!}
            </div>
        </div>

        {!! Form::submit('Guardar',['class'=>'btn btn-theme','onclick'=>'return confirm(“¿Seguro que desea modificar contraseña?")'])!!}

    {!! Form::close() !!}
    </div>
  </div>
@endsection
