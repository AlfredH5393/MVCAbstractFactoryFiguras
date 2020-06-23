console.log("cargando archivosy")
var d = document;
const FIGURAS = new Vue({
    el: "#container2",
    data: {
        figura : "Figuras",
        clasAlert: null,
        titleAlert: null,
        res: [],
    },
    mounted: function(){
     },
     methods: {
        cuadrado: () =>{
            alert("entre al metodo")
           let cuadrado = {
             lado: d.getElementById("ladoCuadro").value,
           }
           let datos = FIGURAS.toFormData(cuadrado,"instanciarCuadrado");
           axios.post("../controller/controller_Data.php", datos)
           .then(function( response){
            console.log(response)
            FIGURAS.res = response.data.cuadrado;
            FIGURAS.alertMessage("mt-4 alert alert-secondary", "Los resultado son :D", FIGURAS.res);
           });
        },
        rectangulo: () =>{
            let rectangulo = {
                base: d.getElementById("base").value,
                altura: d.getElementById("altura").value,
              }
              let datos = FIGURAS.toFormData(rectangulo,"instanciarRectangulo");
              axios.post("../controller/controller_Data.php", datos)
              .then(function( response){
               console.log(response)
               FIGURAS.res = response.data.rectangulo;
               FIGURAS.alertMessage("mt-4 alert alert-primary", "Los resultado son :D", FIGURAS.res);
              });
        },
        triangulo: () =>{
            let triangulo = {
                lado1: d.getElementById("lado1").value,
                lado2: d.getElementById("lado2").value,
                lado3: d.getElementById("lado3").value,
              }
              let datos = FIGURAS.toFormData(triangulo,"instanciarTriangulo");
              axios.post("../controller/controller_Data.php", datos)
              .then(function( response){
               console.log(response)
               FIGURAS.res = response.data.triangulo;
               FIGURAS.alertMessage("mt-4 alert alert-warning", "Los resultado son :D", FIGURAS.res);
              });
        },
        circulo: () =>{
            let circulo = {
                radio: d.getElementById("radio").value,
              }
              let datos = FIGURAS.toFormData(circulo,"instanciarCirculo");
              axios.post("../controller/controller_Data.php", datos)
              .then(function( response){
               console.log(response)
               FIGURAS.res = response.data.circulo;
               FIGURAS.alertMessage("mt-4 alert alert-success", "Los resultado son :D", FIGURAS.res);
              });
        },
        toFormData: (obj, option) => {
            let fd = new FormData();
            fd.append('option', option);
              for (let i in obj) {
                fd.append(i, obj[i]);
              }
            return fd;
        },
        alertMessage: (classAlert, titleAlert, info)=>{
            FIGURAS.clasAlert = classAlert;
            FIGURAS.titleAlert = titleAlert; 
            let resultado = d.getElementById("result");
            const res =  '<p> <b>Figura: </b> <span>' + info[0].nameFigura +'</span> </p>'+
                                 '<p> <b>Perimetro: </b> <span>' + info[0].perimetro + '</span> </p>' +
                                 '<p> <b>Area: </b> <span>'+ info[0].area + '</span> </p>';
            resultado.innerHTML = res;
        },
        emptyAlerts:() => {
            FIGURAS.clasAlert = null;
            FIGURAS.titleAlert = null;
            FIGURAS.res = [];
            d.getElementById("result").innerHTML = " "
        }

     } 
});
