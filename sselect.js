$(document).ready(function(){
    $('#delegaciones').val(0);
    $('#lista2').val(0);
    $('#lista3').val(0);
    $('#lista4').val(0);
    $('#lista5').val(0);
    recargarLista();
    recargarListaB();
    recargarListaC();

    $('#delegaciones').change(function(){
        recargarLista();
    });
    $('.escuelas').change(function(){
        recargarListaA();
    });

    $('.alumno').change(function(){
        recargarListaB();
    });
    $('.alumno').change(function(){
        recargarListaC();
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
        data:"delegacion=" + $('.escuelas').children().val()+" & validador=1",
        success:function(r){
            $('.alumno').html(r);
        }
    });
};

function recargarListaB(){
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.alumno').children().val()+" & validador=2",
        success:function(r){
            $('.archivo').html(r);
        }
    });
};
function recargarListaC(){
    console.log("entre men");
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.alumno').children().val()+" & validador=3",
        success:function(r){
            $('.avance').html(r);
        }
    });
};