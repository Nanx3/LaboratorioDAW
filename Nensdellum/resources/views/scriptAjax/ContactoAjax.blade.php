<script type="text/javascript">

    // var id = document.getElementById("Seleccion").value

    $("#SeleccionPlantel").on('change',function(e){


        if(document.getElementById("SeleccionPlantel").value == 0)
        {
            document.getElementById("DescripcionPlantel").value = null;
            document.getElementById("UbicacionPlantel").value = null;
        }else{

            var id = e.target.value;

        //ajax
        $.get('contacto/planteles/carga?id='+id, function (data) {
            //success data
            //  console.log(data);


            $.each(data,function(index,datosContacto){

                document.getElementById("DescripcionPlantel").value = datosContacto.Descripcion;
                document.getElementById("UbicacionPlantel").value = datosContacto.Ubicacion;
            });
        });
        }
    });
</script>