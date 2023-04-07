<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Florence'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Florence es un juego con una historia en la que nosotros decidiremos que sucederá mediante la elección de diferentes opciones. La trama es sobre una chica que encuentra a su primer amor, un violonchelista, hay que ayudarla a que lo enamora.</p><p>Vivi todo lo que tuvo que pasar esta chica para enamora a su amado Krish, desde peleas hasta las citas mas romanticas.</p><p>Descarga&nbsp;<strong>Florence&nbsp;</strong>APK + OBB 1.0.8 en LOMUCHACHOgames y divertite con esta historia de amor.</p><p>Lo que trae Florence 1.0.8 gratis:</p><ul><li>Historia romantica.</li><li>Tenes la capacidad de elejir que va a pasar en cada momento.</li></ul>";
include_once '../templates/game/v1.php';