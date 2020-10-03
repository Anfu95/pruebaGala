var button_C = document.getElementById('bC'); 
var buttonM_O = document.getElementById('buttonNavResp');
var buttonNavL = document.getElementById('btnNavL');
var naviR = document.getElementById('nP');
button_C.addEventListener('click',cerrarMR)
buttonNavL.addEventListener("click",openMR)
buttonM_O.addEventListener('click',openMR)
function cerrarMR(){
    naviR.classList.add('closeMenuResp')
    console.log(naviR)
}
function openMR(){
    naviR.classList.add('openMenuResp')
    naviR.classList.remove('closeMenuResp')
    console.log(naviR)
}


