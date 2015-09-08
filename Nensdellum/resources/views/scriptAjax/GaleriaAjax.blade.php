<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

    $("#galeriaImagenes").on('change',function(e){

        if(document.getElementById("galeriaImagenes").value == 0)
        {
            document.getElementById("TituloImagen").value = null;
            document.getElementById("DescripcionImagen").value = null;
            document.getElementById("URLImagenI1").value = null;

        }else{


        var id = e.target.value;

        //ajax
        $.get('galeria/imagenes/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosImagen){
                document.getElementById("TituloImagen").value = datosImagen.Titulo;
                document.getElementById("DescripcionImagen").value = datosImagen.Descripcion;
                document.getElementById("URLImagenI1").value = datosImagen.URLImagen;

            });

        });
        }

    });


    $("#galeriaVideos").on('change',function(e){

        if(document.getElementById("galeriaVideos").value == 0)
        {
            document.getElementById("TituloVideo").value = null;
            document.getElementById("DescripcionVideo").value = null;
            document.getElementById("URLVideo").value = null;
        }else{
        var id = e.target.value;

        //ajax
        $.get('galeria/videos/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosVideo){
                document.getElementById("TituloVideo").value = datosVideo.Titulo;
                document.getElementById("DescripcionVideo").value = datosVideo.Descripcion;
                document.getElementById("URLVideo").value = datosVideo.URLImagen;

            });

        });
        }

    });

    $("#galeriaTestimonios").on('change',function(e){

        if(document.getElementById("galeriaTestimonios").value == 0)
        {
            document.getElementById("TituloTestimonio").value = null;
            document.getElementById("DescripcionTestimonio").value = null;
            document.getElementById("URLTestimonio").value = null;
        }else{
        var id = e.target.value;

        //ajax
        $.get('galeria/testimonios/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosTestimonio){
                document.getElementById("TituloTestimonio").value = datosTestimonio.Titulo;
                document.getElementById("DescripcionTestimonio").value = datosTestimonio.Descripcion;
                document.getElementById("URLTestimonio").value = datosTestimonio.URLImagen;

            });

            });
        }
    });
</script>

