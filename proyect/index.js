const navegacion = document.getElementById('menu--navegacion');
const hamburguesa = document.getElementById('hamburguesa');

hamburguesa.addEventListener('click',()=>{
    navegacion.classList.toggle('resposive--dinamico');
    if(hamburguesa.src.split('img')[1] == '/hamburguesa.png'){
        hamburguesa.src = '/img/cruz.png';
    }else{
        hamburguesa.src = '/img/hamburguesa.png';
    }
});

document.addEventListener('DOMContentLoaded',()=>{
    if(window.innerWidth > 768 ){
        navegacion.classList.add('resposive--dinamico');
    }
});

window.addEventListener('load',()=>{
    const contenedor = document.getElementById('contenedor');
    const contenedorPlanetas = document.getElementById('contenedor--planetas');
    const spinner = document.getElementById('spinner');
    setTimeout(() => {
        spinner.style.display = 'none';
        contenedor.style.display='block'
        contenedorPlanetas.style.display='block';
    }, 2000);
});

$(document).ready(function(){
    $('.anclaEfectoAnimada').click(function(e){       
      e.preventDefault();   //Para evitar el evento de un enlace normal
      var miAncla=$(this).attr('href'); //id del ancla
      $('body,html').stop(true,true).animate({        
        scrollTop: $(miAncla).offset().top
      },4000);
  
    });
  });