<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'THE KING OF FIGHTERS 98'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Los fans de KOF de todo el mundo alaban \"KOF '98\" por ser la mejor recopilación de los títulos \"KOF '94\" a \"KOF '97\" y por su fantástico equilibrio de juego.</p><p>Además, esta perfecta versión de \"KOF '98\" ofrece dos diferentes modos de juego, \"EXTRA\" &amp; \"ADVANCED\" y también incluye el modo \"ENTRENAMIENTO\" en el que podrás mejorar todos tus combos! \"KOF '98\" es también compatible con controladores de juego Bluetooth ¡para la mejor experiencia de juego de todos los tiempos</p><p>Descargar&nbsp;<strong>THE KING OF FIGHTERS 98</strong> apk gratis para Android en LOMUCHACHOgames y pelea como el mejor.</p><p>THE KING OF FIGHTERS 98 para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>El mejor equilibrio de juego de la serie \"KOF\"</li><li>38 personajes diferentes</li><li>Perfecta versión de NEOGEO con nuevas características</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';