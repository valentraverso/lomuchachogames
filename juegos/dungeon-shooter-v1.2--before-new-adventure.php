<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dungeon Shooter V1.2 : Before New Adventure'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Dungeon Shooter V1.2 : Before New Adventure es un juego de shooter donde tendrás que matar esqueletos, mago y otros tipos de monstruos con diferentes armas para poder pasar de nivel.</p><p>Hay muchísimas partes que recorrer en este juego de aventura que te desenvolverá dentro de una mazmorra con diversos niveles.</p><p>Descargar&nbsp;<strong>Dungeon Shooter V1.2&nbsp;</strong>gratis full apk en LOMUCHACHOgames y entra a un mundo desconocido.</p><p>Lo que trae Dungeon Shooter V1.2 1.2.97:</p><ul><li>El calabozo está dividido en muchas áreas y tumbas</li><li>La puerta de la mazmorra es circulatoria</li><li>El logro del cazador de monstruos puede lograr dinero, mascotas, armas, etc.</li><li>Cuando dispares a zombies y dueños de monstruos, presta atención al uso de diferentes armas de fuego.</li></ul>";
include_once '../templates/game/v1.php';