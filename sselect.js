$(document).ready(function(){
    $('#delegaciones').val(1);
    recargarLista();
    $('.escuelas').val(1);
    recargarListaA();

    $('#delegaciones').change(function(){
        recargarLista();
    });
    $('.escuelas').change(function(){
        recargarListaA();
    });
});

function recargarLista(){
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('#delegaciones').val()+"& validador=0",
        success:function(r){
            $('.escuelas').html(r);
        }
    });
};

function recargarListaA(){
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.escuelas').val()+" & validador=1",
        success:function(r){
            $('.alumno').html(r);
        }
    });
};