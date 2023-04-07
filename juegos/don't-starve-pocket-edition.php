<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Don\'t Starve: Pocket Edition'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Don’t Starve: Pocket Edition lleva el juego de éxito en PC del que han disfrutado 6 millones de jugadores a Android. ¡Ahora puedes disfrutar del juego de supervivencia en la naturaleza lleno de magia y ciencia donde tú quieras!</p><p>Controla a WIlson quien es un científico que se ha quedado varado en una misterioso lugar lleno de diversas criaturas que únicamente aparecen de noche. Has todo lo posible de dia para poder estar a salvo cuando baja el sol, de lo contrario tu futuro no sera muy placentero.</p><p>Descargar <strong>Don\'t Starve: Pocket Edition </strong>APK + OBB gratis para Android ultima version en LOMUCHACHOgames.</p><p>¿Queres saber acerca de Dont Starve descarga GRATIS para Android?</p><ul><li>Criaturas maléficas que aparecen en la oscuridad</li><li>Horas de diversión en una entretenida historia</li><li>Muchas armas y instrumentos para crear</li></ul>";
include_once '../templates/game/v1.php';