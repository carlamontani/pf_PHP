<?php
  //ver si sirve sino borrar

  $temp = file_get_contents("model/alumnos.json");
  $temp = json_decode($temp, true);
  var_dump($temp);

  foreach ($temp as $key => $course) {
?>

<p><?=$course['first_name']?></p>
<p><?=$course['last_name']?></p>
<p><?=$course['mail']?></p>

<?php
  }
?>