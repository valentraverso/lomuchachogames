<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Traffic Rider HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Descarga Traffic Rider HACKEADO para Android en LOMUCHACHOgames y trata de esquivar todos los veiculos.</p><p>Traffic Rider supone un nuevo nivel en el género de las carreras sin fin al añadir un modo carrera completo, la perspectiva en primera persona, gráficos mejorados y sonidos de motos reales. Este juego conserva la esencia de las carreras con toda la innovación de la nueva generación.</p><p>Descarga <strong>Traffic Rider HACK</strong>&nbsp;para Android en LOMUCHACHOgames y llega lo mas lejos que puedas.</p><p>Lo que trae el Traffic Rider HACK:</p><ul><li>Dinero Infinito</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';