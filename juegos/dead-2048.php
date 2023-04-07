<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'DEAD 2048'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En DEAD 2048 la tierra es timada por zombies y depende de y ti sobrevivir a las rondas muertos vivientes que se aproximan para matarte. Es una combinación innovadora y adictiva de la diversión del rompecabezas 2048 y de las mecánicas de Tower Defense.</p>

<p>Construye Torres para defenderte hasta construir un laboratorio biológico para salvar el mundo, en DEAD 2048 apk la supervivencia es todo lo que importa.</p>

<p>Descargar <strong>DEAD 2048 </strong>apk gratis en LOMUCHACHOgames y sobrevive a los zombies.</p><p>Descarga el apk de DEAD 2048 con las siguientes caracteristicas:</p>
<ul>
 	<li>Fácil y divertido de jugar - pero difícil de convertirse en un maestro</li>
 	<li>¡Extremadamente adictivo y un excelente pasatiempo gratis!</li>
 	<li>Upgrades y Boosters para ayudar durante momentos desafiantes</li>
 	<li>Se puede jugar sin conexión a Internet</li>
</ul>";
include_once '../templates/game/v1.php';