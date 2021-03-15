<?php

$course_list = array(
    array(
        'Course' => 'Maquetado Web',
        'Teacher' => 'Ambrus Rubem',
        'Duration' => 200,
        'Date' => '5/4',
        'Id' => 1
    ),
    array(
        'Course' => 'Diseño Ux-Ui',
        'Teacher' => 'Tomomi Gulisa',
        'Duration' => 100,
        'Date' => '5/4',
        'Id' => 2
    ),
    array(
        'Course' => 'Javascript',
        'Teacher' => 'Uni Svajonė',
        'Duration' => 300,
        'Date' => '5/4',
        'Id' => 3
    ),
    array(
        'Course' => 'Base de Datos',
        'Teacher' => 'Chandra Athaulf',
        'Duration' => 100,
        'Date' => '5/4',
        'Id' => 4
    ),
    array(
        'Course' => 'React',
        'Teacher' => 'Aditi Paraskeva',
        'Duration' => 250,
        'Date' => '5/4',
        'Id' => 5
    ),
    array(
        'Course' => 'NodeJS',
        'Teacher' => 'Monica Sanchez',
        'Duration' => 250,
        'Date' => '5/4',
        'Id' => 6
    ),
    array(
        'Course' => 'PHP',
        'Teacher' => 'Juan Baroni',
        'Duration' => 350,
        'Date' => '5/4',
        'Id' => 7
    ),
    array(
        'Course' => 'Laravel',
        'Teacher' => 'Pablo Smith',
        'Duration' => 200,
        'Date' => '5/4',
        'Id' => 8
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