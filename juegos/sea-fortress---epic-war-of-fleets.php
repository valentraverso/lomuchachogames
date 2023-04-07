<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sea Fortress - Epic War of Fleets'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Una invasión alienígena ha sumido el mundo en el caos más absoluto. La tierra ha sido engullida por un océano sin fin y ha dado comienzo una encarnizada lucha por la supervivencia.</p>

<p>La lucha por el poder y la gloria no tiene fin y demuestra tu poder en este MMO de estrategia en tiempo real de IGG. Es hora de hundir al enemigo.</p>

<p>Descargar<strong> Sea Fortress - Epic War of Fleets </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en el agua.</p>";
include_once '../templates/game/v1.php';