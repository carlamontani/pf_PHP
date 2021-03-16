<?php

function autoload($controller){
    if (file_exists('controllers/' . $controller. '.php'))
        require_once 'controllers/' . $controller. '.php';
}

spl_autoload_register('autoload');

$controller = isset($_GET['controller']) ? $_GET['controller'].'Controller' : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

if(class_exists($controller)){
    $controller = new $controller();

    if(method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "La acción ingresada no existe";
    }
} else {
    require_once 'views/home.php';
}


/*

function autoload($controller){
  include 'controllers/' . $controller . '.php';
}

spl_autoload_register('autoload');

$controller = isset($_GET['controller']) ? $_GET['controller'].'Controller' : "";
$action = isset($GET['action']) ? $_GET['action'] : "";

//si existe el controler ejecuta el autoload, include
if(class_exists($controller)){
  $controller = new $controller();

  //ejecuta la accion
  if(method_exists($controller,$action)){
    $controller->$action();
  }
}
//$pepe = new Pepe()
//
 */