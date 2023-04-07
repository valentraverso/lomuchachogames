<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Adventurous Box'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>La caja de aventuras es una mezcla sensacional de rompecabezas y aventura. Solo relájate y juega mundos minimalistas bellamente diseñados. Cada mundo tiene su propio sabor único. La caja de aventuras es simple y fácil de jugar pero difícil de dominar.</p><p>No es tan fácil, todas esas piedras lechosas viven dentro de los lugares rodeados de trampas impresionantes, pero mortales.</p><p>Descarga&nbsp;<strong>Adventurous Box</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y disfruta de la increíble aventura.</p><p><strong>Adventurous Box</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>20 mundos hermosos y minimalistas con dificultad creciente.</li><li>MUCHAS trampas mortales</li><li>Magnífica combinación de rompecabezas y aventura.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';