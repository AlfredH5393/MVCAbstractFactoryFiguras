<?php
require '../model/IFigura.php';
require '../model/model_Cuadrado.php';
require '../model/model_Rectangulo.php';
require '../model/model_Triangulo.php';
require '../model/model_Circulo.php';

class ModelFactoryProducer{


    public static function crearfactory($figura){
        $facoryObeject;

        switch ($figura) {
            case 'Cuadrado':
                 $facoryObeject = new ModelCuadrado();
                break;
            case 'Rectangulo':
                 $facoryObeject = new ModelRectangulo();
                break;
            case 'Triangulo':
                 $facoryObeject = new ModelTriangulo();
                break;
            case 'Circulo':
                 $facoryObeject = new ModelCirculo();
                break;
        }

        return $facoryObeject;
    }
}
