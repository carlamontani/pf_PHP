<?php

require_once('Persona.php');

class Profesor extends Persona {
    public $teacher;
    public $duration;
    public $date;
    public $value;

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

    public function showResult() {
        include 'views/header.php';
        foreach ($alumnos as $key => $alumno) {
            ?>
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
            <?php
        }
        include 'views/footer.php';
    }
}