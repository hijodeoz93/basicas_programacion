
function ocultar(){
    document.getElementById('integrantes').style.display="none";
}
function confirmar(){
   let val=1;
    if(document.registro.us.value.length==0){
        alert('El campo usuario no debe estar vacio');
        document.registro.us.focus();
        return val=0;
    }
    if(document.registro.pass.value.length<8){
        alert('La contraseña debe ser de 8 caracteres minimo.');
        document.registro.pass.focus();
        return val=0;
    }
    if(document.registro.nomint.value.length==0){
        alert('El nombre no debe estar vacio');
        document.registro.nomint.focus();
        return val=0;
    }
    if(document.registro.edadint.value<18){
        alert('La edad debe ser mayor a 18');
        document.registro.edadint.focus();
        return val=0;
    }
    if(document.registro.carrint.value.length==0){
        alert('El nombre de la carrera no debe estar vacio');
        document.registro.carrint.focus();
        return val=0;
    }
    if(document.registro.telint.value.length==0){
        alert('El telefono no debe estar vacio');
        document.registro.telint.focus();
        return val=0;
    }
    if(document.registro.correoint1.value.length==0){
        alert('El correo no debe estar vacio');
        document.registro.correoint1.focus();
        return val=0;
    }
    //val=confirm("¿Estas seguro de enviar los datos?");
   if(val==1){
            document.registro.submit();
        }else{
            val=0;
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