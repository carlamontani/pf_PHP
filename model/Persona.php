<?php
abstract class Persona {
    //atributos-
    private $name;
    private $last_name;
    public $mail;
    private $phone;
    private $level;
    public $course;

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
        include '../views/header.php';
        ?>
            <div class="row">
                <div style="margin-top: 15%">
                    <h2><strong>Hola <?php echo $this->name ?> !</strong></h2>
                </div>
            </div>
        <?php
        echo '<h5>' . "Ya estas inscripte a " . $this->course .  "&#10024" . '</h5>';
        echo '<p>' . "Te enviamos un mail de confirmación a " . '<strong>' . $this->mail . '</strong>' . '</p>';
        ?>

            <form action="../index.php">
                <button class="button-primary">Volver</button>
            </form>
        <?php
        include '../views/footer.php';
    }
}

/*
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
*/