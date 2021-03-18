<?php
    include '../model/courses.json'; //
    require_once 'header.php';
    $temp = file_get_contents("model/courses.json");
    $courses = json_decode($temp, true); 
?>
    <div class="row">
        <div style="margin-top: 15%">
            <h2>Escuela de Programación y Software</h2>
            <p>Lista de Cursos</p>
        </div>
    </div>
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
                    foreach ($courses as $key => $course) {
                    ?>
                        <tr>
                            <td><?=$course['course']?></td>
                            <td><?=$course['teacher']?></td>
                            <td><?=$course['date']?></td>
                            <td><?=$course['duration']?> hs.</td>
                            <td><?=$course['course']?></td>
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
