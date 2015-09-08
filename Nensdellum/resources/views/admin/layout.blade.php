<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>NENSDELLUM ADMIN</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">



    @yield('css')

</head>
<body>




    @yield('barra')


    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <h5 class="centered">Bienvenido(a)</h5>
                <h4 class="centered">¿Que deseas editar?</h4>
                <li class="mt">
                    <a href="{{ route('admin') }} " class="active">
                        <i class="glyphicon glyphicon-home"></i>
                        <span>Página de Inicio</span>
                    </a>
                </li>

                <li class="sub-menu dcjq-parent-li">
                    <a href=" {{ route('admin/quienessomos') }} " class="dcjq-parent">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>¿Quiénes somos?</span>
                    </a>
                </li>

                <li class="sub-menu dcjq-parent-li">
                    <a href="{{ route('admin/galeriayvideos') }} " class="dcjq-parent">
                        <i class="glyphicon glyphicon-film"></i>
                        <span>Galerías y videos</span>
                    </a>
                </li>


                <li class="sub-menu dcjq-parent-li">
                    <a href="{{ route('admin/comoayudar') }} " class="dcjq-parent">
                        <i class="glyphicon glyphicon-gift"></i>
                        <span>¿Cómo ayudar?</span>
                    </a>
                </li>

                <li class="sub-menu dcjq-parent-li">
                    <a href="{{ route('admin/boletin') }} " class="dcjq-parent">
                        <i class="glyphicon glyphicon-duplicate"></i>
                        <span>Boletín</span>
                    </a>
                </li>

                <li class="sub-menu dcjq-parent-li">
                    <a href="{{ route('admin/contactanos') }} " class="dcjq-parent">
                        <i class="glyphicon glyphicon-globe"></i>
                        <span>Contáctanos</span>
                    </a>
                </li>

                <li class="sub-menu dcjq-parent-li">
                    <a href="{{ route('admin/ajustes') }} ">
                        <i class= "glyphicon glyphicon-cog"></i>
                        <span>Ajustes</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <section id="container">


        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-angle-right"></i>Página de inicio </h3>
                <div class="row mt">
                    <div class="col-lg-12">

                        @yield('contentImagenes')



                        @yield('contentBienvenidos')

                        @yield('logros')

                        @yield('notificaciones')

                        @yield('colaboradores')

                    </div>
             </div>

            </section>
        </section><!-- /MAIN CONTENT -->
    </section>


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <script src="adminTemplate/js/jquery.js"></script>
    <script src="adminTemplate/js/bootstrap.min.js"></script>
    <script src="adminTemplate/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="adminTemplate/js/jquery.ui.touch-punch.min.js"></script>
    <script src="adminTemplate/js/jquery.scrollTo.min.js"></script>
    <script src="adminTemplate/js/jquery.nicescroll.js"></script>
    <script src="adminTemplate/js/common-scripts.js"></script>

    <script src="adminTemplate/js/common-scripts.js"></script>
    <script src="adminTemplate/js/jquery.dcjqaccordion.2.7.js"></script>


    @include('scriptAjax.ajax')

</body>
</html>
