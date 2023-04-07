<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rise Up'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0 o +";
$texto = "<p>Rise Up es un divertido juego de habilidad en el que tendrás que controlar un pequeño escudo con la misión de evitar que el globo que proteges sea explotado. Esta aventura pondrá a prueba tu habilidad, capacidad de reacción y velocidad de movimiento y te proporcionará horas de diversión frente a la pantalla de tu terminal.</p><p>Intenta que tu globo no choque contra nada así vas a poder llegar mucho mas alto.</p><p>Descarga <strong>Rise Up </strong>GRATIS para Android en LOMUCHACHOgames y sube tu plástico muy alto.</p><p>Acá te dejamos mas sobre este juego:</p><ul><li>Gratis para jugar</li><li>Control de un dedo</li><li>Diferentes obstáculos y experiencias</li><li>Modo de juego infinito</li></ul>";
include_once '../templates/game/v1.php';