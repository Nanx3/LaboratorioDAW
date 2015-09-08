<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

    $("#SeleccionRedesSociales").on('change',function(e){

        if(document.getElementById("SeleccionRedesSociales").value == 0)
        {
            document.getElementById("TituloRedSocial").value = null;
            document.getElementById("URLPaginaRedSocial").value = null;
            document.getElementById("GlyphRedSocial").value = null;
        }else{
        var id = e.target.value;

        //ajax
        $.get('comoAyudar/redessociales/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosRedesSociales){

                document.getElementById("TituloRedSocial").value = datosRedesSociales.Titulo;
                document.getElementById("URLPaginaRedSocial").value = datosRedesSociales.URLPagina;
                document.getElementById("GlyphRedSocial").value = datosRedesSociales.Glyph;

            });
        });
        }
    });


    $("#SeleccionDonadores").on('change',function(e){


        if(document.getElementById("SeleccionDonadores").value == 0)
        {
            document.getElementById("TituloDonadores").value = null;
            document.getElementById("DescripcionDonadores").value = null;
            document.getElementById("URLImagenComoA").value = null;
        }else{

        var id = e.target.value;

        //ajax
        $.get('comoAyudar/donadores/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosDonadores){

                document.getElementById("TituloDonadores").value = datosDonadores.Titulo;
                document.getElementById("DescripcionDonadores").value = datosDonadores.Descripcion;
                document.getElementById("URLImagenComoA").value = datosDonadores.URLImagen;

            });
          });
        }
    });

</script>


