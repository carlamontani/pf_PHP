<?php
class Persona {
    //atributos-
    private $name;
    private $last_name;
    private $mail;
    private $phone;
    private $level;
    private $course;

    //getters

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    //setters
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            return $this->$property = $value;
        }
    }

    //metodos
    public function showResult() {
        return $this->name . " " . $this->last_name . " esta inscripte a " . $this->course ;
    }
}

//instancio persona
$andres = new Persona();
$andres->name='Andres';
$andres->last_name='Gomez';
$andres->course='PHP';

$mariana = new Persona();
$mariana->name='Mariana';
$mariana->last_name='Lopez';
$mariana->course='Laravel';

echo $andres->showResult();
echo $mariana->showResult();
