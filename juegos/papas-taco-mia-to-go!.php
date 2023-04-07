<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Taco Mia To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Tendrá que realizar múltiples tareas entre cuatro áreas de la tienda de tacos, con nuevos controles diseñados para funcionar a la perfección en la palma de su mano.</p><p>Mantener contentos a sus clientes para ganar más puntos y subir de nivel. A medida que su nivel aumenta, podrás desbloquear nuevos ingredientes para la tienda, y los nuevos clientes comenzará visitando la taquería</p><p>Descarga <strong>Papas Taco Mia To Go!</strong>&nbsp;para Android gratis apk en LOMUCHACHOgames y haz los mejores tacos.</p><p>Mas cosas acerca de Papas Taco Mia To Go! para Android gratis:</p><ul><li>12 días de fiesta</li><li>108 clientes para desbloquear</li><li>Multi-tarea entre la cocina, la construcción</li><li>&nbsp;90 logros en el juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';