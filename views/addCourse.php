<?php
    require_once 'header.php';
?>
    <div class="row">
        <div style="margin-top: 15%">
            <h3>Sumar tu curso</h3>
            <p>Complete sus datos para publicar:</p>
        </div>
    </div>
    <form method="post" name="add_student" action="../index.php?controller=courses&action=agregar">
        <input type="hidden" name="action" value="add">
        <div class="row">
            <div class="twelve columns">
                <label for="exampleEmailInput">Nombre del Curso</label>
                <input class="u-full-width" type="text" id="exampleEmailInput" name="course">
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <label for="exampleEmailInput">Nombre del Docente</label>
                <input class="u-full-width" type="text" id="exampleEmailInput" name="teacher">
            </div>
            <div class="six columns">
                <label for="exampleEmailInput">Mail</label>
                <input class="u-full-width" type="email" placeholder="test@mail.com" id="exampleEmailInput" name="mail">
            </div>
        </div>
        <div class="row">
            <div class="four columns">
                <label for="exampleEmailInput">Duración del curso</label>
                <input class="u-full-width" type="number" placeholder="hs." id="exampleEmailInput" name="duration">
            </div>
            <div class="four columns">
                <label for="exampleEmailInput">Fecha de Inicio</label>
                <input class="u-full-width" type="text" placeholder="Formato dia/mes/año" id="exampleEmailInput" name="date">
            </div>
            <div class="four columns">
                <label for="exampleEmailInput">Valor</label>
                <input class="u-full-width" type="number" id="exampleEmailInput" name="value">
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
