<?php

//require ('data/courses.php');
//falta desarrollar
require_once('mainController.php');

class courseController extends Controller {
    public function agregar() {
        echo 'agregar cursos';
    }
}

/*
 *
/*
 * require_once('controllers/mainController.php');

class stockController extends BaseController {

    public function listar($msg = NULL) {
        $vehiculos = $this->getData('vehiculos');

        $this->getView('stock', 'list');
    }
    public function agregar() {
        if (isset($_POST['agregado'])) {
            // Set INFO INTO ARRAY
            $vehiculo = [
                "id" => 5,
                "marca" =>  "Chevrolet",
                "modelo" =>  "Onix",
                "ano" =>  2021,
                "color" =>  "Plateado",
                "precio" =>  1890000,
                "moneda" =>  "ARS"
            ];
            $vehiculos = $this->getData('vehiculos');
            array_push($vehiculos, $vehiculo);
            $this->setData('vehiculos', $vehiculos);
            $this->listar();
        }

        $this->getView('stock', 'agregar');

    }

    public function editar() {
        $this->getView('stock', 'editar');
    }

    private function cantidad() {

    }
}/*
 */