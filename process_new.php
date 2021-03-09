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
            
            add_employee();
            //return_index();
            break;
        default:
            return_index();
    }
}

function add_employee(){
    var_dump($_POST);
    $nombre = trim($_POST['name']);
}
