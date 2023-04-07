<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Iron Marines HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Recluta y entrena los más grandes héroes de la galaxia, lidéralos en peligrosas misiones con ínfimas posibilidades de éxito y da rienda suelta a sus temibles poderes y habilidades.</p><p>Ejércitos de robots, naves estrelladas, monstruos gigantescos, razas desconocidas, temerarios asaltos, rescates desesperados, sabotajes audaces.</p><p>Descarga&nbsp;<strong>Iron Marines HACK</strong> apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y obtén la mejor victoria.</p><p><strong>Iron Marines HACK</strong> para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';