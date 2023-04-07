<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Chameleon Run'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>Chameleon Run es un juego de carreras único, rápido y desafiante con un toque colorido. Salta, cambia de color y corre a través de niveles expertamente diseñados que te mantendrán enganchado.</p><p>Tu objetivo es cambiar de color para que coincida con el del suelo mientras corres y saltas de plataforma en plataforma. Suena fácil, pero no te confíes.</p><p>Descarga&nbsp;<strong>Chameleon Run</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y termina 1ero.</p><p><strong>Chameleon Run</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Física de píxeles perfecta.</li><li>Niveles no lineales con tres objetivos especiales en cada uno.</li><li>Controles simples con dos botones.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';