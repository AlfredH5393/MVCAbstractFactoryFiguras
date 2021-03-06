
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
    <div class="container-fluid text-center">
        <?php require('./navbar.html')?>
    </div>
   
    <div class="container " id="container2">
        <h1 class="">Ejercicio "{{figura}}" || Patron Factory</h1>
        <div class="mt-4" >
            <h2 class="text-center">Triangulo</h2>
            <form action="" id ="formRectagulo">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Lado 1: </label>
                    <div class="col-sm-2">
                        <input type="text" class=" form-control" id="lado1">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">lado 2: </label>
                    <div class="col-sm-2">
                        <input type="text" class=" form-control" id="lado2">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">lado 3: </label>
                    <div class="col-sm-2">
                        <input type="text" class=" form-control" id="lado3">
                    </div>
                </div>
                <button type="button" class="btn btn-warning" @click = "triangulo()"> Calcular</button>
            </form>
        </div>
      

        <div :class="clasAlert" role="alert">
                <h4 class="alert-heading">{{titleAlert}}</h4>
                <hr>
                <div id="result">

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