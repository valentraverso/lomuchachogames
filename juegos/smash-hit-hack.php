<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Smash Hit HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Un viaje surrealista a través de una dimensión mística por la que tendrás que moverte siguiendo el ritmo del sonido y la música y aplastar lo que encuentres a tu paso.</p>

<p>Para esta experiencia, necesitarás precisión, concentración y buen ritmo para viajar lo más lejos que puedas y romper los hermosos objetos de cristal que encontrarás por el camino.</p>

<p>Descargar<strong> Smash Hit HACK </strong>apk gratis para Android en LOMUCHACHOgames y llega lo mas lejos que puedas.</p>";
include_once '../templates/game/v1.php';