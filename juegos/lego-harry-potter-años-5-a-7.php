<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO Harry Potter: años 5 a 7'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>La saga del “niño que vivió” continúa en esta hechizante aventura para magos y muggles. Vive los últimos años de Harry en Hogwarts y libra la batalla definitiva entre el bien y el mal contra Lord Voldemort.</p>

<p>La creatividad de LEGO® se une al vasto mundo de Harry Potter para ofrecerte una experiencia de juego de lo más apasionante y gratificante que incluye lecciones, lanzamiento de conjuros, duelos y mucho más para jugadores de todas las edades.</p>

<p>Descargar<strong> LEGO Harry Potter: años 5 a 7 </strong>apk + obb gratis para Android en LOMUCHACHOgames y se el mejor mago.</p><p>LEGO Harry Potter: años 5 a 7 para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>GRÁFICOS ASOMBROSOS</li>
 	<li>CONTROLES DE PANTALLA TÁCTIL INTUITIVOS</li>
 	<li>LOGROS</li>
</ul>";
include_once '../templates/game/v1.php';