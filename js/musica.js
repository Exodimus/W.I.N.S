import { $,cargarMusica,reproducirMusica,pausarMusica,continuarMusica,siguienteMusica,anteriorMusica,}
from "./funciones.js";
const btnCargar = $('#files');
const listaMusica=$('#lista-musica');
const btnPause=$('.pause');
const btnPlay=$('.play');
const btnSiguiente=$('.adelante');
const btnAtras=$('.atras');
document.addEventListener('DOMContentLoaded',()=>{
    btnCargar.addEventListener('change',cargarMusica);
    listaMusica.addEventListener('click',reproducirMusica);
    btnPause.addEventListener('click',pausarMusica);
    btnPlay.addEventListener('click',continuarMusica);
    btnSiguiente.addEventListener('click',siguienteMusica);
    btnAtras.addEventListener('click',anteriorMusica);
})