<?php

require_once('controllerController.php');

class alumnosController extends Controller {

  public function listar() {
    $alumnos = $this->getData('alumnos');
    var_dump($alumnos);
    //$this->getView('views','newStudent');
  }

  //AGREGAR NUEVO DESDE FORMULARIO
  public function agregar() {

    //VISTA FORM PARA AGREGAR ALUMNOS
    $this->getView('views','addStudent');

    //INFO DESDE EL FORMULARIO
    $alumno = [
      "first_name" => 'Juan',
      "last_name" => 'Toro',
      "mail" => "juancito@gmail.com",
      "phone" => 1529430200,
      "level" => "avanzado",
      "course" => 'laravel'
    ];

    $alumnos = $this->getData('alumnos');

    array_push($alumnos, $alumno);

    $this->setData('alumnos', $alumnos);
    $this->listar();
  }
}

/* 

<?php
//base controller renombrar
require_once('controllers/controllerController.php');

class alumniController extends Controller {
    //const JSON_ALUMNI = 'data/alumni.json';

    //private function getAlumni() {
    //  $alumni = file_get_contents(self::JSON_ALUMNI);
    //  return json_decode($alumni, true);  
    //}

    public function listar() {
        //$this->getAlumni();
        //$alumni = file_get_contents(self::JSON_ALUMNI);
        //$alumni = json_decode($alumni, true);  
        //echo "entre";
        //var_dump($alumni);
        $alumni = $this->getData('alumni');
        var_dump($alumni);
    }

    //AGREGAR NUEVO DESDE FORMULARIO
    public function agregar() {
        $vehiculo = [
          "id" => 4,
          "marca" => "Torino",
          "modelo" => "viejo",
          "ano" => 1,
          "color" => "violeta bb",
          "precio" => 8544875343,
          "moneda" => "USD"
        ];

        $alumni = $this -> getData('alumni');

        array_push($alumni, $vehiculo);
        //file_put_contents(self::JSON_VEHICULOS, json_encode($array));
        $this -> setData('alumni', $alumni)
    }

    public function editar() {
        echo "listado2";
    }

    private function cantidad() {
        echo "listado2";
    }
}




json encode
//clase para traer todos los alumnos del json
class alumniController {
    const JSON_ALUMNI = 'data/alumni.json';

    public function listar() {
        echo "listado";
        //$alumni = file_get_contents(self::JSON_ALUMNI);
        //$alumni = json_decode($alumni, true);
        //echo "entre";
        //var_dump($array);
    }

    public function add($alumni) {
        echo "listado";
        array_push($array, $alumni);
        file_put_contents(self::JSON_ALUMNI, json_decode($array));
    }

    public function editar() {
        echo "listado";
    }

    public function cantidad(){
        echo "listado";
    }
}

*/