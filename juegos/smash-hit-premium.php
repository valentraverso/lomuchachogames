<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Smash Hit Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Un viaje súper mágico a través de una dimensión mística por la que tendrás que moverte y atravesar siguiendo el ritmo del sonido y la música y aplastar lo que encuentres en tu camino. Para esta experiencia, necesitarás mucha precisión, bastante concentración y buen ritmo para viajar lo más lejos que puedas y romper los hermosos objetos de cristal que encontrarás por tu camino.</p><p>Más de 50 salas distintas con 11 estilos diferentes de gráficos, además de mecánicas en cada etapa para destrozar cristales muy fuertes</p><p>Descarga&nbsp;<strong>Smash Hit Premium</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y rompe vidrios a por doquier.</p><p><strong>Smash Hit Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Juego Premium</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';