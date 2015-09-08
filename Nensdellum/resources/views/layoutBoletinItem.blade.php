@include('boletinPublic.EncabezadoBoletin')


    <section id="blog" class="container">

        <div class="center">
            <h2>Boletín</h2>
            <p class="lead">Artículo de Boletín</p>
        </div>



        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{ $boletinItem->URLImagen }}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date">{{ $boletinItem->updated_at}}</span>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>{{ $boletinItem->Titulo }}</h2>
                                    <p>{{ $boletinItem->Descripcion}}</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->

                </div><!--/.col-md-8-->

                @include('buscadorBoletin.BuscadorBoletin')

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