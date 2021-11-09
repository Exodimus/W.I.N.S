import { $,cargarVideo,reproducirVideo }
from "./funciones.js";
const btnCargar = $('#files');
const listaVideo=$('#lista-video');
document.addEventListener('DOMContentLoaded',()=>{
    btnCargar.addEventListener('change', cargarVideo);
    listaVideo.addEventListener('click',reproducirVideo);
})