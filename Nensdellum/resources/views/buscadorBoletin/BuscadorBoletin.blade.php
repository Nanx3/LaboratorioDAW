

<aside class="col-md-4">

        {!! Form::open(['route' => 'boletinLista' ,'method'=>'GET']) !!}

        <div class="col-lg-14">
            <div class="input-group">

                {!! Form::text('buscador', null, ['class' => 'form-control','placeholder'=>'Buscar']) !!}

              <span class="input-group-btn">
                       {!! Form::submit('Buscar',['class'=>'btn btn-default']) !!}
                </span>

            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        {!! Form::close() !!}



</aside>





