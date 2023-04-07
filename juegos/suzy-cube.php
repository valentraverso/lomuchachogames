<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Suzy Cube'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Ay, no, los malvados Skulls se robaron todo el oro del Castillo Cubetón.<br>Suzy Cube es la única que puede recuperar el tesoro del castillo de manos de esos bravucones nefastos.<br>Descubre el simple placer de jugar en plataformas con este brillante y divertido juego en 3D lleno de sorpresas.</p><p>Un proyecto hecho con pasión, que rescata la esencia de los juegos de plataformas en 3D para traerles sonrisas y alegría a todos los jugadores.</p><p>Descarga&nbsp;<strong>Suzy Cube</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recupera el amado castillo.</p><p><strong>Suzy Cube</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Controles sencillos, claros y receptivos.</li><li>Más de 40&nbsp;niveles diferentes.</li><li>Secretos y mejoras por descubrir.</li><li>Compatibilidad total con controles.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';