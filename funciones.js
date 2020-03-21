
function ocultar(){
    document.getElementById('integrantes').style.display="none";
}
function confirmar(){
    val=confirm("¿Estas seguro de enviar los datos?");
    if(val){
            document.registro.submit();
        }
        
    }

    function mostrar_form(){
        var datos=document.getElementById('integ').value;
        if(datos>=2 & datos<=5){
            console.log(datos)
        }
    }
    //window.onload=function(){ocultar()};