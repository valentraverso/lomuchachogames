<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Reigns: Juego de Tronos'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Revive la famosa serie de HBO \"Game of Thrones\" en este maravilloso juego de castillos y dragones. Controla bien a tu pueblo y usa tácticas para crear mucho animo en los otros politicos que participan con vos en el trono.&nbsp;Ten cuidado con los otros reinos que siempre estaran atentos al mejor momento para atacarte y despojarte de tu cargo de rey, tambien podras salir un poco de la parte politica y divertirte con asuntos mas trivales.</p><p>Descarga&nbsp;<strong>Reigns: Juego de Tronos</strong>&nbsp;gratis para Android en LOMUCHACHOgames y Juga Feliz en tu mundo de ficcion!!</p><p>Mas de Reigns: Juego de Tronos:</p><ul><li>Minijuegos regios</li><li>Reimagina Poniente</li><li>Un Reigns más grandioso</li></ul>";
include_once '../templates/game/v1.php';