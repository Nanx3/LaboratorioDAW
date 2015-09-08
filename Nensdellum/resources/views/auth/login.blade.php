@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>Iniciar Sesión | Nens de Llum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/login.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.css')  }}">
    <link rel="stylesheet" href="{{ asset('publicUsersTemplate/css/font-awesome.min.css')  }}">
</head>

<body>

@if (count($errors) > 0)
<div class="alert alert-danger" style="text-align: center">
    Por favor corrige los siguientes errores: <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div>
    <div    style="text-align: center;">
        <a href="{{ route('home') }} "><img class="logo"  src="{{ asset('publicUsersTemplate/images/logos/logoNens.png') }}" alt="Nens de Llum"></a>
    </div>
<div style="width:400px; margin:0 auto; background:#1C2B4A; margin-top:25px">
    <div class="header"><h4>Iniciar Sesión</h4></div>
    <div class="login">

                <form role="form" method="POST" action=" {{ route('iniciarSesion')}} ">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <ul>
                        <li>
                            <span class="un"><i class="fa fa-user fa-lg"></i></span><input type="email" class="text" name="email" value="{{ old('email') }}" placeholder="E-mail">
                        </li>

                        <li>
                            <span class="un"><i class="fa fa-lock  fa-lg"></i></span><input type="password" class="text" name="password" placeholder="Contraseña">
                        </li>

                        <li>
                            <input type="submit" style="width:100%;" class="btn" value="Ingresar">
                        </li>

                    <li><div class="span"><span class="ch"><input type="checkbox" name="remember" id="r"> <label for="r">Recuérdame</label></span><span class="ch"> <a class="letras" href="{{ url('/password/email') }}">¿Olvidaste tu contraseña?</a></span></div></li>
                    </ul>
                </form>
            </div>
    </div>
</div>
   </body>
</html>
@endsection
