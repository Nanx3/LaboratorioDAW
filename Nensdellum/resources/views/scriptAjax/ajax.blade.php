<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

            $("#SeleccionColaborador").on('change',function(e){


                if(document.getElementById("SeleccionColaborador").value == 0)
                {
                    document.getElementById("TituloColaborador").value = null;
                    document.getElementById("DescripcionColaborador").value = null;
                }else{


                    var id = e.target.value;


                //ajax
                $.get('home/colaboradores/carga?id='+id, function (data) {
                    //success data
                 //  console.log(data);


                    $.each(data,function(index,datosColaborador){

                        document.getElementById("TituloColaborador").value = datosColaborador.Titulo;
                        document.getElementById("DescripcionColaborador").value = datosColaborador.Descripcion;

                    });
                  });
                }
            });


            $("#SeleccionNotificacion").on('change',function(e){


                if(document.getElementById("SeleccionNotificacion").value == 0)
                {
                    document.getElementById("TituloNotificaciones").value = null;
                    document.getElementById("DescripcionNotificaciones").value = null;
                    document.getElementById("URLImagen7").value = null;
                }else{


                var id = e.target.value;


                //ajax
                $.get('home/notificaciones/carga?id='+id, function (data) {
                    //success data
                    //  console.log(data);


                    $.each(data,function(index,datos){

                        document.getElementById("TituloNotificaciones").value = datos.Titulo;
                        document.getElementById("DescripcionNotificaciones").value = datos.Descripcion;
                        document.getElementById("URLImagen7").value = datos.URLImagen;


                    });
                });
                }
            });


            $("#SeleccionLogros").on('change',function(e){


                if(document.getElementById("SeleccionLogros").value == 0)
                {

                    document.getElementById("TituloLogros").value = null;
                    document.getElementById("DescripcionLogros").value = null;
                    document.getElementById("URLImagen5").value = null;
                }else{

                var id = e.target.value;


                //ajax
                $.get('home/logros/carga?id='+id, function (data) {
                    //success data
                    //  console.log(data);


                    $.each(data,function(index,datos){

                        document.getElementById("TituloLogros").value = datos.Titulo;
                        document.getElementById("DescripcionLogros").value = datos.Descripcion;
                        document.getElementById("URLImagen5").value = datos.URLImagen;

                    });
                });
                }
            });

</script>


