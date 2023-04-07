<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Star Wars™: TCS'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Experiencia la colección entera que combina LEGO Star Wars: The Video Game y la secuela LEGO Star Wars II: The Original Trilogy para disfrutar horas de contenido épico de Star Wars en tu dispositivo Android.</p>

<p>Empieza tu aventura en Star Wars: Episodio I la amenaza fantasma y viaja por los seis episodios en el estilo fantástico y humorístico de LEGO. Qué los ladrillos te acompañen.</p>

<p>Descargar <strong>LEGO® Star Wars™: TCS </strong>apk + obb gratis para Android en LOMUCHACHOgames y que la fuerza te acompañe.</p><p>LEGO® Star Wars™: TCS para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>MÁS DE 120 PERSONAJES</li>
 	<li>PODERES DE LA FUERZA</li>
 	<li>MECÁNICA DE JUEGO ESTILO LEGO</li>
</ul>";
include_once '../templates/game/v1.php';