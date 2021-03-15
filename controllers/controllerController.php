<?php 

//base Controller
abstract class Controller {
    protected function getData($table) {
    $temp = file_get_contents("model/$table.json");
    return json_decode($temp, true);  
  }

  protected function setData($table, $array){
    var_dump($array);
    file_put_contents("model/$table.json", json_encode($array));
  }

  protected function getView($controller, $template = NULL){
    require_once("./$controller/$template.php");
  }
}