const optionTriangulo = document.querySelector("#option-triangulo");
const optionCirculo = document.querySelector("#option-circulo");
const optionCuadrado = document.querySelector("#option-cuadrado");
const optionRect = document.querySelector("#option-rectangulo");


window.addEventListener('load', ()=>{
    $('#vistas').load('./view_cuadrado.html');
});

optionTriangulo.addEventListener('click', ()=>{
    $('#vistas').load('./view_triangulo.html');
})

optionCirculo.addEventListener('click', ()=>{
    $('#vistas').load('./view_circulo.html');
})

optionCuadrado.addEventListener('click', ()=>{
    $('#vistas').load('./view_cuadrado.html');
})

optionRect.addEventListener('click', ()=>{
    $('#vistas').load('./view_rectangulo.html');
})