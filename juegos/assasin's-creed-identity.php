<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Assasin\'s Creed Identity'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Explora el RENACIMIENTO ITALIANO a través de los ojos de TU PROPIO ASESINO, completa un montón de misiones y resuelve el misterio épico de Los Cuervos</p><p>Es una de las sagas más conocidas de la historia. Con el paso de los años, ha conseguido un gran éxito gracias a juegos tan famosos como Assassin’s Creed Syndicate, Assassin’s Creed Unity, Assassin’s Creed Black Flag, etc.</p><p>Descarga&nbsp;<strong>Assasin's Creed Identity</strong> gratis para Android en LOMUCHACHOgames y trata de aniquilar a los enemigos y proteger a los tuyos.</p><p>&nbsp;</p><p>Si queres saber mas sobre este juego de asesinos para Android:</p><ul><li>CREA, EVOLUCIONA Y PERSONALIZA A TU ASESINO</li><li>&nbsp;MILES DE MISIONES Y POSIBILIDADES</li><li>&nbsp;LA EXCELENCIA TÉCNICA DE LOS JUEGOS DE ASSASSIN'S CREED</li></ul>";
include_once '../templates/game/v1.php';