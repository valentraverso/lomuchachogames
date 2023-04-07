<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Slaughter MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Esta Russell en un mercenario que fue encarcelado en una ciudad habitada por los locos! Tiene un largo viaje hacia la libertad mentira por las calles sombrías de la ciudad abandonada. Coge un arma de fuego y barrer a través de hordas de los dementes y los jefes terribles.</p><p>En la \"Masacre\" se podrá jugar una campaña para un jugador y modo de supervivencia (modo de arena).</p><p>Descarga&nbsp;<strong>Slaughter MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y aniquila.</p>";
$info = "<p><strong>Slaughter MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD de Armas</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';