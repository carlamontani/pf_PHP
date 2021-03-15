<?php

//require ('data/courses.php');
require_once('controllerController.php');

class courseController extends Controller {
  //const JSON_ALUMNI = 'data/alumni.json';

  public function listar() {
    $alumni = $this->getData('alumnos');
    var_dump($alumni);
    $this->getView('stock','list');
  }
  //AGREGAR NUEVO DESDE FORMULARIO
  public function agregar() {
    echo '....';
    $vehiculo = [
      "first_name" => 4,
      "last_name" => "Torino",
      "mail" => "viejo",
      "phone" => 1,
      "level" => "violeta bb",
      "course" => 8544875343
    ];
    $alumni = $this->getData('alumni');

    array_push($alumni, $vehiculo);

    //file_put_contents(self::JSON_VEHICULOS, json_encode($array));
    $this->setData('alumni', $alumni);

    $this->listar();
  }
}

/*require_once('controllers/controllerController.php');

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