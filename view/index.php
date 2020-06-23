<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras || Patron de diseño Factory</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/style.css">
</head>
<body>
   
   
    <div class="container " id="container2">
    <h1 class="">Ejercicio "{{figura}}" || Patron Factory</h1>
       <div class="row m-auto">
           <div class="col-auto mb-5" style=" margin-rigth: 10px;" >
                <div class="card border-secondary" style="width: 15rem; ">
                    <img src="../src/img/cube.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>Cuadrado</h3>
                        <p class="card-text"> Es una figura geométrica que pertenece a los paralelogramos porque tiene 4 lados</p>
                        <a href="./view_cuadrado.php" class="btn btn-secondary" style="color: white;"> Ir a calcular</a>
                    </div>
                </div>
           </div>
           <div class="col-auto mb-5">
                <div class="card border-primary" style="width: 15rem;">
                            <img src="../src/img/reactangle.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Rectangulo</h3>
                                <p class="card-text">Es un polígono de 4 lados (una figura plana de lados rectos) en donde cada ángulo es un ángulo recto (90°). También los lados opuestos son paralelos y de igual longitud</p>
                                <a href="./view_rectangulo.php" class="btn btn-primary " style="color: white;"> Ir a calcular</a>
                            </div>
                    </div>
           </div>
           <div class="col-auto mb-5">
                    <div class="card border-warning" style="width: 15rem;">
                            <img src="../src/img/triangle.jpg" class="card-img-top" alt="..." h>
                            <div class="card-body">
                                <h3>Triangulo</h3>
                                <p class="card-text">Es el símbolo geométrico que representa el número tres y por lo tanto clave de la geometría y 'proporción divina'.</p>
                                <a href="./view_triangulo.php" class="btn btn-warning " style="color: white;"> Ir a calcular</a>
                            </div>
                    </div>
           </div>
           <div class="col-auto mb-5">
                    <div class="card border-success" style="width: 15rem;">
                            <img src="../src/img/circle.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>Circulo</h3>
                                <p class="card-text">es el área o superficie contenida dentro de una circunferencia</p>
                                <a href="./view_circulo.php" class="btn btn-success " style="color: white;"> Ir a calcular</a>
                            </div>
                    </div>
           </div>
       </div>
    </div>
    <!-- <script src="../src/js/jquery-3.5.1.min.js"></script>
    <script src="../src/js/load_views.js"></script> -->
    <script src="../src/js/axios.min.js"></script>
    <script src="../src/js/vue.js"></script>
    <script src="../src/js/figuras.js"></script>
</body>
</html>