<?php
    include 'data.php';
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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

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
    <div class="row">
        <table class="u-full-width">
            <thead>
            <tr>
                <th>Curso</th>
                <th>Profesor</th>
                <th>Duracion</th>
                <th>Inicio</th>
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
                        <td><?=$course['Duration']?></td>
                        <td><?=$course['Duration']?></td>
                        <td><?=$course['Course']?></td>
                        <td>
                            <button>Anotarme</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <?php
        foreach ($course_list as $key => $course) {
            ?>

            <?php
        }
        ?>
    </div>
    <input class="button-primary" type="submit" value="Ir al Carrito">
</div>

<script src="alert.js"></script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
