@include('boletinPublic.EncabezadoBoletin')
    
    <section id="blog" class="container">
        <div class="center">
            <h2>Boletín</h2>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">


                 @foreach($boletines as $boletinItem)
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">{{ $boletinItem->updated_at}}</span>


                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="{{ $boletinItem->URLImagen }}" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html">{{ $boletinItem->Titulo }}</a></h2>
                                <p class="lead"> {{  substr($boletinItem->Descripcion, 0, 200) }}</p>
                                <a class="btn btn-primary readmore"  href="{{ route('boletinItem',$boletinItem->id) }}">Leer más <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                     @endforeach


                       {!! $boletines->setPath('')->render()!!}





            </div><!--/.row-->
               @include('buscadorBoletin.BuscadorBoletin')
        </div>
    </section><!--/#blog-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a>Nens de Llum</a>. All Rights Reserved.
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