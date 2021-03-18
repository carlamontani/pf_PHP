<?php

require_once('mainController.php');

class coursesController extends Controller {

    public function listar() {
        $alumnos = $this->getData('alumnos');
        //var_dump($alumnos);
        //$this->getView('views','newStudent');
        require_once ('views/header.php');
        foreach ($alumnos as $key => $alumno) {
            ?>
            <form method="post" name="add_newCourse" action="views/addStudent.php">
                <div class="row">
                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Inicio</th>
                            <th>Duración</th>
                            <th>Costo</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$alumno['course']?></td>
                            <td><?=$alumno['teacher']?></td>
                            <td><?=$alumno['date']?></td>
                            <td><?=$alumno['duration']?> hs.</td>
                            <td><?=$alumno['course']?></td>
                            <td>
                                <button>Anotarme</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </form>
            <?php
        }
    }

    //AGREGAR NUEVO DESDE FORMULARIO
    public function agregar() {

        //VISTA FORM PARA AGREGAR ALUMNOS
        //$this->getView('views','addStudentView');
        var_dump($_POST);
        //INFO DESDE EL FORMULARIO

        $course = isset($_POST['course']) ? trim($_POST['course']) : "";
        $teacher = isset($_POST['teacher']) ? trim($_POST['teacher']) : "";
        $mail = isset($_POST['mail']) ? ($_POST['mail']) : "";
        $duration = isset($_POST['$duration']) ? ($_POST['duration']) : ""; //agregar validacion para numeros
        $date = isset($_POST['$date']) ? ($_POST['date']) : "";
        $value = isset($_POST['value']) ? ($_POST['value']) : "";

        //var_dump($course);
        require_once('model/Profesor.php');
        require_once('model/Alumno.php');
        $newCourse = new Profesor();
        $newCourse->course=$course;
        $newCourse->teacher=$teacher;
        $newCourse->mail=$mail;
        $newCourse->duration=$duration;
        $newCourse->date=$date;
        $newCourse->value=$value;
        //echo $newCourse->showResult();

        var_dump($newCourse);
        //$persona = new Profesor();
        //echo $persona->prueba();

        $alumnos = $this->getData('alumnos');

        array_push($alumnos, $newCourse);

        $this->setData('alumnos', $alumnos);

        $this->listar();
    }
}


/*

<?php
//base controller renombrar
require_once('controllers/mainController.php');

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
        $alumno = [
            "first_name" => 'Juan',
            "last_name" => 'Toros',
            "mail" => "juancito@gmail.com",
            "phone" => 1529430200,
            "level" => "avanzado",
            "course" => 'laravel'
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