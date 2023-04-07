<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stardew Valley HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Muévete al campo y cultiva una nueva vida en este &nbsp;juego granja abierto.</p><p>Nuevas características específicas para dispositivos móviles, como el guardado automático y múltiples opciones de control.</p><p>Descarga <strong>Stardew Valley HACK</strong> apk y obb gratis en LOMUCHACHOgames y diviertete.</p><p>Lo que trae <strong>Stardew Valley HACK</strong>:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';