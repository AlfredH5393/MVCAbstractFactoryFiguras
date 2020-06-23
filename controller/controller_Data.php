<?php 
require '../model/model_FactoryProducer.php';
//option para elegir la instancia
$opcionFigura = $_POST['option'];


switch ($opcionFigura) {
    case 'instanciarCuadrado':
            $ladoCuadrado = $_POST['lado'];
            $cuadrado = ModelFactoryProducer::crearfactory('Cuadrado');
            $cuadrado->setLado($ladoCuadrado);  
            echo $cuadrado->descripcion();
        break;
    case 'instanciarRectangulo':
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $rectangulo = ModelFactoryProducer::crearfactory('Rectangulo');
            $rectangulo->setBase($base); 
            $rectangulo->setAltura($altura); 
            echo $rectangulo->descripcion();
        break;
    case 'instanciarTriangulo':
            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];
            $lado3 = $_POST['lado3'];
            $triangulo = ModelFactoryProducer::crearfactory('Triangulo');
            $triangulo->setLado1($lado1);
            $triangulo->setLado2($lado2);
            $triangulo->setLado3($lado3);
            echo $triangulo->descripcion();
        break;
    case 'instanciarCirculo':
            $radio = $_POST['radio'];
            $circulo = ModelFactoryProducer::crearfactory('Circulo');
            $circulo->setRadio($radio);
            echo $circulo->descripcion();

        break;
}