<?php
    require_once 'header.php'
?>
    <div class="row">
        <div style="margin-top: 15%">
            <h3>Formulario de Inscripción</h3>
            <p>Cursos Seleccionados:</p>
        </div>
    </div>
    <form method="post" name="add_student" action="../controllers/newAlumnosController.php">
        <div class="row">
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>Curso</th>
                    <th>Profesor</th>
                    <th>Duracion</th>
                    <th>Inicio</th>
                    <th>Costo</th>
                    <th>Confirmación</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Diseño Ux-Ui</td>
                    <td>Tomi Gulisa</td>
                    <td>100 hs.</td>
                    <td>5/4</td>
                    <td>$2000</td>
                    <td>
                        <label class="example-send-yourself-copy">
                            <input type="checkbox" name="course" value="Diseño Ux-Ui">
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
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
