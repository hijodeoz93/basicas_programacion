
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

    document.addEventListener("DOMContentLoaded",()=>{
        let form=document.getElementById('form_subir');
        form.addEventListener("submit", function(event){
            event.preventDefault();
            subir(this);
        });
    
    });
    
    function subir(form){
        let barra_estado=form.children[1].children[0],
        span=barra_estado.children[0],
        bnt_cancelar=form.children[2].children[1];
        console.log(barra_estado, span, bnt_cancelar)
    
        barra_estado.classList.remove('barra-verde', 'barra-roja');
        
        //peticion
        let peticion=new XMLHttpRequest(); 
    
        //progreso
        peticion.upload.addEventListener("progress", (event)=>{
            let porcentaje=Math.round((event.loaded/event.total) * 100);
    
            console.log(porcentaje);
    
            barra_estado.style.width= porcentaje + '%';
    
            span.innerHTML=porcentaje + '%';
        });
    
    
        //finalizando
        peticion.addEventListener("load", ()=>{
            barra_estado.classList.add('barra-verde');
            span.innerHTML="Proceso completado";
    
    
        });
    
    
        //enviar datos
        peticion.open("post","sube.php");
        peticion.send(new FormData(form));
    
        //cancelar
    
        bnt_cancelar.addEventListener("click", ()=>{
            peticion.abort();
            barra_estado.classList.remove('barra-verde');
            barra_estado.classList.add('barra-roja');
            span.innerHTML="Proceso cancelado";
        });
    }
    //window.onload=function(){ocultar()};