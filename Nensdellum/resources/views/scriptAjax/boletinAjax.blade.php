<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

    $("#SeleccionBoletin").on('change',function(e){


        if(document.getElementById("SeleccionBoletin").value == 0)
        {
            document.getElementById("TituloBoletin").value =null;
            document.getElementById("DescripcionBoletin").value =null;
            document.getElementById("URLImagenBoletin2").value =null;
        }else{

        var id = e.target.value;


        //ajax
        $.get('boletin/boletines/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosColaborador){

                document.getElementById("TituloBoletin").value = datosColaborador.Titulo;
                document.getElementById("DescripcionBoletin").value = datosColaborador.Descripcion;
                document.getElementById("URLImagenBoletin2").value = datosColaborador.URLImagen;


            });




        });
        }

    });

</script>


