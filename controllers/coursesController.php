<?php

require_once('mainController.php');

class coursesController extends Controller {

    public function listar() {
        
      //trae data de de cursos, borrar
      //$alumnos = $this->getData('courses');

      //VISTA DE LA HOME con data de courses.json
      require_once ('views/home.php');
    }

    //AGREGAR NUEVO DESDE FORMULARIO
    public function agregar() {

        $course = isset($_POST['course']) ? trim($_POST['course']) : "";
        $teacher = isset($_POST['teacher']) ? trim($_POST['teacher']) : "";
        $mail = isset($_POST['mail']) ? ($_POST['mail']) : "";
        $duration = isset($_POST['$duration']) ? ($_POST['duration']) : ""; 
        $date = isset($_POST['$date']) ? ($_POST['date']) : "";
        $value = isset($_POST['value']) ? ($_POST['value']) : "";

        require_once('model/Profesor.php');

        $newCourse = new Profesor();
        $newCourse->course=$course;
        $newCourse->teacher=$teacher;
        $newCourse->mail=$mail;
        $newCourse->duration=$duration;
        $newCourse->date=$date;
        $newCourse->value=$value;

        //traigo data
        $courses = $this->getData('courses');

        //push de nuevo curso
        array_push($courses, $newCourse);

        //seteo data
        $this->setData('courses', $courses);

        //vuelve a listar
        $this->listar();
    }
}