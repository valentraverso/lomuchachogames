<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Battlevoid: Harbinger'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Battlevoid: Harbinger es un juego de exploración espacial que combina elementos de estrategia por turnos con ciertos toques roguelike en un mapa galáctico y batallas en tiempo real.</p>

<p>En tu aventura, encarnarás a un joven comandante al que se le ha encomendado la misión de adentrarse en territorio enemigo. Por tanto, te verás inmerso en galaxias desconocidas, lejos de casa, sin saber muy bien qué estará acechando en el hiperespacio.</p>

<p>Descargar<strong> Battlevoid: Harbinger </strong>apk gratis para Android en LOMUCHACHOgames y defiendete de los enemigos.</p><p>Battlevoid: Harbinger para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Aventura de ciencia ficción y simulación espacial muy intensa y adictiva.</li>
 	<li>Explora en cada partida galaxias totalmente nuevas generadas por ordenador.</li>
 	<li>Sistema de mejora de torretas único, nunca antes visto en ningún otro juego.</li>
</ul>";
include_once '../templates/game/v1.php';