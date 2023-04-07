<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pixel Gun 3D'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Bienvenido al mundo de Pixel Gun 3D, crea y personaliza tu personaje con el creador de pieles. Luego sal al campo de batalla, y destruye a tus oponentes en un juego parecido a Minecraft pero con armas y mucho modos de juegos.</p><p>Este es un juego de disparos en donde todo es cuadrado y la forma de jugar es muy fácil. Hay una gran cantidad de armas que puedes usar para matar a tus enemigos, ademas lo mejor es que podes probar tus habilidades contra tus amigos o personas que no conozcas en el modo multijugador.</p><p>Descargar&nbsp;<strong>Pixel Gun 3D&nbsp;</strong>APK + OBB ultima version en LOMUCHACHOgames y mata a la mayor cantidad de enemigos posibles.</p><p>Lo que trae Grand Pixel Gun 3D para Android:</p><ul><li>Muchos modos de funcionamiento del juego.</li><li>Más de 35 mapas y ubicaciones.</li><li>Mucha comunicación entre jugadores del mismo mundo.</li><li>Efectos de sonido apasionantes.</li></ul>";
include_once '../templates/game/v1.php';