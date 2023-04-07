<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Worms 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>BENEFÍCIATE de las ventajas de la nueva función que cambia el método de juego. Activa el modo Cartas y modifica el principio y el final de cada turno con cartas estratégicas.&nbsp;<br>RECOGE recompensas de juego que te permitirán comprar cartas de bronce, plata y oro. Construye tu mazo con 41 cartas diseñadas endiabladamente<br>ELIGE tu combinación de gusanos perfecta para la batalla con el nuevo sistema de \"clases\": el gusano Fortachón, Científico, Explorador, y el clásico Soldado.</p><p>Mas sobre Worms 3:</p><ul><li>SÉ EL MEJOR</li><li>MAYOR CONTROL</li><li>MARAVÍLLATE</li></ul>";
include_once '../templates/game/v1.php';