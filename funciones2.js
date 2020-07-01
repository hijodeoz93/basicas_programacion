document.addEventListener("DOMContentLoaded",()=>{
    let form=document.getElementById('sube_tareas');
    form.addEventListener("submit", function(event){
        event.preventDefault();
        subir(this);
    });

});

function subir(form){
    console.log(form)
    let barra_estado=form.children[9].children[0],
    span=barra_estado.children[0],
    bnt_cancelar=form.children[10].children[1];
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
    peticion.open("post","sube2.php");
    peticion.send(new FormData(form));

    //cancelar

    bnt_cancelar.addEventListener("click", ()=>{
        peticion.abort();
        barra_estado.classList.remove('barra-verde');
        barra_estado.classList.add('barra-roja');
        span.innerHTML="Proceso cancelado";
    });
}