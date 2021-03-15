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

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <div style="margin-top: 15%">
            <h3>Inscribite</h3>
            <p>Cursos Seleccionados:</p>
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
                <tr>
                    <td>Curso</td>
                    <td>Curso</td>
                    <td>Curso</td>
                    <td>Curso</td>
                    <td>Curso</td>
                    <td>
                        <button>Desinscribirme</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <form method="post" name="add_student" action="process_new.php">
        <input type="hidden" name="action" value="add">
        <div class="row">
            <div class="six columns">
                <label for="exampleEmailInput">Nombre</label>
                <input class="u-full-width" type="text" id="exampleEmailInput" name="name">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Apellido</label>
                <input class="u-full-width" type="text" id="exampleEmailInput" name="last_name">
            </div>
        </div>
        <div class="row">
            <div class="four columns">
                <label for="exampleEmailInput">Mail</label>
                <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput" name="mail">
            </div>
            <div class="four columns">
                <label for="exampleEmailInput">Teléfono</label>
                <input class="u-full-width" type="number" id="exampleEmailInput" name="phone">
            </div>
            <div class="four columns">
                <label for="exampleRecipientInput">Nivel de conocimiento</label>
                <select class="u-full-width" id="exampleRecipientInput" name="level">
                    <option value="Basico">Basico</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                </select>
            </div>
        </div>
        <input class="button-primary" type="submit" value="Submit">
    </form>

    <!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

    <!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->
</div>

<!-- End Document


  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
