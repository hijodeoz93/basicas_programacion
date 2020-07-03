
function ocultar(){
    document.getElementById('integrantes').style.display="none";
}
function confirmar(){
   let val=1;
    if(document.registro.us.value.length==0){
        alert('El campo usuario no debe estar vacio');
        document.registro.us.focus();
    }else if(document.registro.pass.value.length<8){
        alert('La contraseña debe ser de 8 caracteres minimo.');
        document.registro.pass.focus();
    }else if(document.registro.nomint.value.length==0){
        alert('El nombre no debe estar vacio');
        document.registro.nomint.focus();
    }else if(document.registro.carint.value.length==0){
        alert('El nombre de la carrera no debe estar vacio');
        document.registro.carint.focus();
    }else if(document.registro.telint.value.length==0){
        alert('El telefono no debe estar vacio');
        document.registro.telint.focus();
    }else if(document.registro.correoint.value.length==0){
        alert('El correo no debe estar vacio');
        document.registro.correoint1.focus();
    }else{ 
    val=confirm("¿Estas seguro de enviar los datos?");
    if(val){
             document.registro.submit();
         }else{
             document.registro.abort();
         }
        }

        
    }
    function confirmar_(){
        let val=1;
         if(document.registro.us.value.length==0){
             alert('El campo usuario no debe estar vacio');
             document.registro.us.focus();
         }else if(document.registro.pass.value.length<8){
             alert('La contraseña debe ser de 8 caracteres minimo.');
             document.registro.pass.focus();
         }else if(document.registro.nomint.value.length==0){
             alert('El nombre no debe estar vacio');
             document.registro.nomint.focus();
         }else if(document.registro.telint.value.length==0){
             alert('El telefono no debe estar vacio');
             document.registro.telint.focus();
         }else if(document.registro.correoint.value.length==0){
             alert('El correo no debe estar vacio');
             document.registro.correoint.focus();
         }else{ 
         val=confirm("¿Estas seguro de enviar los datos?");
         if(val){
                  document.registro.submit();
              }else{
                  document.registro.abort();
              }
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
        console.log(form)
        let barra_estado=form.children[6].children[0],
        span=barra_estado.children[0],
        bnt_cancelar=form.children[7].children[1];
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

    function controltag(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        else if (tecla==0||tecla==9)  return true;
       // patron =/[0-9\s]/;// -> solo letras
        patron =/[0-9\s]/;// -> solo numeros
        te = String.fromCharCode(tecla);
        return patron.test(te);
         }

function checarnom(){
    var inputEmail = document.querySelector('#nomint');

    inputEmail.onkeyup = function(e) {
        var max = 15; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}

function checarape(){
    var inputEmail = document.querySelector('#apeint');

    inputEmail.onkeyup = function(e) {
        var max = 15; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}

function checarus(){
    var inputEmail = document.querySelector('#inlineFormInputGroup');

    inputEmail.onkeyup = function(e) {
        var max = 8; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}
function checarpass(){
    var inputEmail = document.querySelector('#pass');

    inputEmail.onkeyup = function(e) {
        var max = 10; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}
function checarcarr(){
    var inputEmail = document.querySelector('#exampleFormControlInput1');

    inputEmail.onkeyup = function(e) {
        var max = 15; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}
function checarpass2(){
    var inputEmail = document.querySelector('#inputPassword');

    inputEmail.onkeyup = function(e) {
        var max = 10; // The maxlength you want
      
        if(inputEmail.value.length > max) {
          inputEmail.value = inputEmail.value.substring(0, max);
        }
      
    };

}


    //window.onload=function(){ocultar()};