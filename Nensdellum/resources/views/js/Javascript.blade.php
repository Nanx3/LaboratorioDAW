
<script>


/// VISTA PREVIA IMAGENES ///


function myFunction(Imagen,aux) {
    var valor = document.getElementById(Imagen).value;
    document.getElementById(aux).innerHTML = '<img class="img-rounded"  style="width:25%;height:20%" src="'+valor+'">';
    $('img').error(function() {

        if($('#'+Imagen).val().length < 1) {
            document.getElementById(aux).innerHTML = ' ';
        }else {
            document.getElementById(aux).innerHTML = 'URL no valida';
            $(this).remove();
        }
    });
}
</script>