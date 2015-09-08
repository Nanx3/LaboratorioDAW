<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

    $("#SeleccionEvolucion").on('change',function(e){


        if(document.getElementById("SeleccionEvolucion").value == 0)
        {
            document.getElementById("Titulo").value = null;
            document.getElementById("Descripcion").value = null;
            document.getElementById("ImagenEvolucion2").value = null;

        }else{

        var id = e.target.value;


        //ajax
        $.get('quienessomos/evolucion/carga?id='+id, function (data) {
            //success data
            //  console.log(data);

            $.each(data,function(index,datos){

                document.getElementById("Titulo").value = datos.Titulo;
                document.getElementById("Descripcion").value = datos.Descripcion;
                document.getElementById("ImagenEvolucion2").value = datos.URLImagen;


            });

          });
        }

    });


    $("#SeleccionValores").on('change',function(e){


        if(document.getElementById("SeleccionValores").value == 0)
        {
            document.getElementById("TituloValores").value = null;
            document.getElementById("DescripcionValores").value = null;

        }else{


        var id = e.target.value;


        //ajax
        $.get('quienessomos/valores/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datos){

                document.getElementById("TituloValores").value = datos.Titulo;
                document.getElementById("DescripcionValores").value = datos.Descripcion;



            });




        });
        }

    });


    $("#SeleccionFilosofia").on('change',function(e){


        if(document.getElementById("SeleccionFilosofia").value == 0)
        {
            document.getElementById("DescripcionFilosofia").value = null;
            document.getElementById("GlyphFilosofia").value = null;

        }else{

        var id = e.target.value;


        //ajax
        $.get('quienessomos/filosofias/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datos){


                document.getElementById("DescripcionFilosofia").value = datos.Descripcion;
                document.getElementById("GlyphFilosofia").value = datos.Glyph;


            });

          });
        }

    });


    $("#CausasSeleccion").on('change',function(e){


        if(document.getElementById("CausasSeleccion").value == 0)
        {
            document.getElementById("TextoCausas").value = null;

        }else{

        var id = e.target.value;


        //ajax
        $.get('quienessomos/causas/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datos){


                document.getElementById("TextoCausas").value = datos.Texto;



            });

        });
       }
    });

    $("#ProgramasSeleccion").on('change',function(e){


        if(document.getElementById("ProgramasSeleccion").value == 0)
        {
            document.getElementById("TextoProgramas").value =null;
        }else{

        var id = e.target.value;


        //ajax
        $.get('quienessomos/programas/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datos){


                document.getElementById("TextoProgramas").value = datos.Texto;

            });
        });
        }

    });





</script>


