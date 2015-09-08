@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>Restablecer contraseña | Nens de Llum</title>
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/login.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.min.css')  }}">
</head>

<body>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> Hay problemas con tu solicitud<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div style="width:40%; margin:0 auto; background:#1C2B4A; margin-top:25px">
    <div class="header"><h4>Restablecer contraseña</h4></div>
    <div class="login">

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="token" value="{{ $token }}">


            <br>
            <ul>
                <li>
                    <div class="col-md-12">
                        <span class="un"><i class="fa fa-envelope fa-lg"></i></span><input type="email" placeholder="Correo electrónico" class="text" name="email" value="{{ old('email') }}">

                    </div>
                </li>

                <li>
                    <div class="col-md-12">
                        <span class="un"><i class="fa fa-lock fa-lg"></i></span><input placeholder="Contraseña" type="password" class="text" name="password">

                    </div>
                </li>

                <li>
                    <div class="col-md-12">
                        <span class="un"><i class="fa fa-lock fa-lg"></i></span><input type="password" placeholder="Confirmar contraseña" class="text" name="password_confirmation">
                    </div>
                </li>
                <li style="text-align: center">
                    <button type="submit" class="btn" style="width:95%;">Ingresar</button>
                </li>
            </ul>
            <li></li>
        </form>

    </div>
</div>
</body>
</html>
@endsection

