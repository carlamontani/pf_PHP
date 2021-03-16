<?php

if (isset($_POST['action']) || isset($_GET['action'])) {

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = "";
    }

    switch ($action){
        case("add"):
            add_student();
            //return_index();
            break;
        default:
            return_index();
    }
}

function add_student(){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : "";
    $mail = isset($_POST['mail']) ? ($_POST['mail']) : "";
    $phone = isset($_POST['$phone']) ? ($_POST['phone']) : ""; //agregar validacion para numeros
    $level = isset($_POST['$level']) ? trim($_POST['level']) : "";
    $course = isset($_POST['course']) ? ($_POST['course']) : "";

    //var_dump($course);
    require_once('../model/Persona.php');
    $student = new Persona();
    $student->name=$name;
    $student->last_name=$last_name;
    $student->mail=$mail;
    $student->level=$level;
    $student->course=$course;
    echo $student->showResult();
}