<?php
    include 'model/courses.php'; //
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>TP PHP</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="views/css/normalize.css">
    <link rel="stylesheet" href="views/css/skeleton.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- sweet alert
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">


</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div style="margin-top: 15%">
            <h2>Escuela de Programación y Software</h2>
            <p>Lista de Cursos</p>
        </div>
    </div>
    <!--
          DEBERIA IR A http://localhost/MVC/index.php?controller=alumnos&action=agregar o http://localhost/MVC/views/addStudent.php ?
    -->
    <form method="post" name="add_newCourse" action="views/addStudent.php">
        <div class="row">
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>Curso</th>
                    <th>Profesor</th>
                    <th>Inicio</th>
                    <th>Duración</th>
                    <th>Costo</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($course_list as $key => $course) {
                    ?>
                        <tr>
                            <td><?=$course['Course']?></td>
                            <td><?=$course['Teacher']?></td>
                            <td><?=$course['Date']?></td>
                            <td><?=$course['Duration']?> hs.</td>
                            <td><?=$course['Course']?></td>
                            <td>
                                <button id="<?=$course['Id']?>" name="<?=$course['Id']?>" >Anotarme</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!--
          DEBERIA IR A http://localhost/MVC/index.php?controller=alumnos&action=agregar o http://localhost/MVC/views/addStudent.php ?
        -->

    </form>
    <form action="./views/addCourse.php">
        <input class="button-primary" type="submit" value="Agrega tu curso">
    </form>
</div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
