<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Battlevoid: Sector Siege HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Battlevoid: Sector Siege es un juego de estrategia en tiempo real cargado de acción en el que comandarás las fuerzas de la humanidad con el objetivo de defenderte de una gran variedad de facciones enemigas.</p>

<p>El mundo de Battlevoid: Sector Siege se ha diseñado para conseguir un campo de batalla lleno de vida, donde la acción está a pocos segundos del comienzo de cada partida.</p>

<p>Descargar<strong> Battlevoid: Sector Siege HACK </strong>apk gratis para Android en LOMUCHACHOgames y defiendete de los enemigos.</p>";
include_once '../templates/game/v1.php';