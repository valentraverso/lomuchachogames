<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Corre Salchicha Corre HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Deja de jugar y empieza a correr en esta aventura, es el sueño de un perrito caliente, o una pesadilla, dependiendo de lo bien que lo haga. Juega como la deliciosa salchicha que elijas. Weisswurst o Blutwurst, Tocino o Chocolate.</p><p>Corre por tu vida por un camino interminable mientras flexionas ese cuerpo de perrito caliente y evitas que te corten en rodajas, te piquen, quemen o aplasten en esta aventura de carrera.</p><p>Descarga&nbsp;Corre Salchicha Corre HACK&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y salva a la salchicha.</p><p>Corre Salchicha Corre HACK APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';