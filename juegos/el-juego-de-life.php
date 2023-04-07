<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'El Juego de Life'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Ve a la universidad, acepta un empleo y juega a minijuegos en esta aplicación interactiva con la que toda la familia se lo pasará en grande. Mira cómo las piezas del tablero que representan a los distintos personajes cobran vida y van superando las distintas etapas de la vida en esta espectacular nueva versión animada y en 3D del clásico juego de mesa familiar.</p><p>El Juego de Life incluye un nuevo modo multijugador único, tan esperado por todos. Con el emparejamiento de partidas en línea podrás jugar de un modo completamente nuevo. Juega contra otros jugadores en línea y competid por ser el primero en llegar a la casilla amarilla del final de la vida.</p><p>Descarga&nbsp;<strong>El Juego de Life</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y vive la vida.</p>";
$info = "<p><strong>El Juego de Life</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MULTIJUGADOR EN LÍNEA: enfréntate a otros jugadores y competid por llegar a la casilla amarilla antes que nadie.</li><li>JUEGO LOCAL: juega con un máximo de tres jugadores en un solo dispositivo.</li><li>MODO RÁPIDO: un nuevo modo de juego rápido en el que tendrás que enfrentarte con una nueva condición de victoria.</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "";
include_once '../templates/game/v1.php';