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
    var_dump($_POST);
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : "";
    //$phone = isset($_POST['$phone']) ? ($_POST['phone']) : ""; //agregar validacion para numeros
    //$level = isset($_POST['$level']) ? trim($_POST['level']) : "";

    require_once('Persona.php');
    $student = new Persona();
    $student->name=$name;
    $student->last_name=$last_name;
    //$student->level=$level;
    echo $student->showResult();
}

function return_index() {
    header('LOCATION: index.php');
}