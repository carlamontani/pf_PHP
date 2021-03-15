<?php 
//require_once('alumnosController.php');
?>

<form method="post" name="add_student" action="./process_add.php">
  <input type="hidden" name="action" value="add">
  <input name="first_name" placeholder="Nombre">
  <input name="last_name" placeholder="Apellido">
  <input class="button-primary" type="submit" value="Anotarme">
</form>

