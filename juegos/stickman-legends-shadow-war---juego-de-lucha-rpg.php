<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stickman Legends: Shadow War - Juego De Lucha RPG'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Convertite en el mejor guerrero en este juego PvP que al mismo tiempo es RPG. Crea tu stickman y domina el lado oscuro con las mejores armas, armaduras, habilidades y skins.</p><p>Descarga <strong>Stickman Legends : Shadow Wars</strong> Apk en LOMUCHACHOgames y divertite conquistando al mundo!</p><p>Mas de Stickman Legends: Shadow War - Juego De Lucha RPG:</p><p>LA BATALLA LEGENDARIA</p><p>LA ASOMBNOSA HABILIDAD</p><p>EL HÉROE DEL PALO</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';