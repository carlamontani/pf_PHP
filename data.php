<?php

$course_list = array(
    array(
        'Course' => 'Maquetado Web',
        'Teacher' => 'Ambrus Rubem',
        'Duration' => 200
    ),
    array(
        'Course' => 'Diseño Ux-Ui',
        'Teacher' => 'Tomomi Gulisa',
        'Duration' => 100
    ),
    array(
        'Course' => 'Javascript',
        'Teacher' => 'Uni Svajonė',
        'Duration' => 300
    ),
    array(
        'Course' => 'Base de Datos',
        'Teacher' => 'Chandra Athaulf',
        'Duration' => 100
    ),
    array(
        'Course' => 'React',
        'Teacher' => 'Aditi Paraskeva',
        'Duration' => 250
    ),
    array(
        'Course' => 'NodeJS',
        'Teacher' => 'Monica Sanchez',
        'Duration' => 250
    ),
    array(
        'Course' => 'PHP',
        'Teacher' => 'Juan Baroni',
        'Duration' => 350
    ),
    array(
        'Course' => 'Laravel',
        'Teacher' => 'Pablo Smith',
        'Duration' => 200
    ),
);

//var_dump($course_list);

//foreach ($course_list as $course) {
    //echo '<h2>' . ($course['Course']) . '</h2>';
//}


/*
//array column
$resultado = array_column($course_list, 'Teacher');
print_r($resultado);

 <?php
    foreach ($course_list as $key => $course) {
        if ($key < 3) {
        ?>
            <div class="one-third column">
                <div>
                    <?=$course['Course']?>
                </div>
                <button>Anotarme</button>
            </div>

        <?php
        } elseif ($key > 4 && $key < 6) {
            ?>
            <div class="one-third column">
                <div>
                    <?=$course['Course']?>
                </div>
                <button>Anotarme</button>
            </div>
            <?php
        } else {
            ?>
            <div class="one-third column">
                <div>
                    <?=$course['Course']?>
                </div>
                <button>Anotarme</button>
            </div>
            <?php
            }
        ?>

        <?php
    }
    ?>

*/