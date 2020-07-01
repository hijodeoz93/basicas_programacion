$(document).ready(function(){
    $('#delegaciones').val(0);
    $('#lista2').val(0);
    $('#lista3').val(0);
    $('#lista4').val(0);
    $('#lista5').val(0);
    $('.archivo').val(0);
    $('.cal').val(0);
    recargarLista();
    recargarListaB();
    recargarListaC();
    recargarListaD();

    $('#delegaciones').change(function(){
        recargarLista();
    });
    $('.escuelas').change(function(){
        recargarListaA();
    });

    $('.alumno').change(function(){
        recargarListaB();
        recargarListaC();
        recargarListaD();
    });
    $('.archivo').change(function(){
        recargarVisualiador();
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
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.alumno').children().val()+" & validador=3",
        success:function(r){
            $('.avance').html(r);
        }
    });
};
function recargarListaD(){
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.alumno').children().val()+" & validador=4",
        success:function(r){
            $('.cal').html(r);
        }
    });
};
function recargarVisualiador(){
    console.log("entre aqui men")
    $.ajax({
        type:"POST",
        url:"datos.php",
        data:"delegacion=" + $('.alumno').children().val()+" & validador=5&arch="+$('.archivo').children().val(),
        success:function(r){
            $('.ver').html(r);
        }
    });
};