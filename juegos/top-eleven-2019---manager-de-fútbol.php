<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Top Eleven 2019 - Manager de Fútbol'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Top Eleven 2019 es el juego de ser el DT tecnico de un equipo de futbol, lo bueno empieza cuando te das cuenta de que vos podes armar tu equipo. En Top Eleven apk para Android vas a poder comprar y vender jugadores en el mercado de transferencias de football.</p>

<p>Juega contra equipos online y sube en la tabla del campeonato para ser el mejor equipo del mundo. Desarrolla tu club y controla todos los aspectos de tu equipo: crea tus propias estrategias y alineaciones y enfréntate a José Mourinho, a tus amigos y a millones de Mánagers de Top Eleven a diario.</p>

<p>Descargar <strong>Top Eleven 2019 </strong>gratis para Android en LOMUCHACHOgames y dale vida a tu club de futbol.</p><p>Top Eleven apk es el juego que te va a llevar a ser un gran manager, tu equipo te esta esperando.</p>
<ul>
 	<li>Mejora tu estadio con nuevas instalaciones.</li>
 	<li>Ficha a los mejores jugadores en el mercado de traspasos.</li>
 	<li>Diseña tus propias sesiones de entrenamiento para mejorar a tus jugadores.</li>
 	<li>Domina las tácticas y formaciones de tu equipo.</li>
 	<li>Desafía a otros Mánagers de fútbol a diario en competiciones y partidos amistosos.</li>
 	<li>Dirige tu equipo e influye en el resultado de los partidos en directo con la mejor experiencia futbolística para Mánagers.</li>
 	<li>Forma equipo con tus amigos en torneos semanales.</li>
 	<li>Compite en la Liga, la Copa, la Champions y la Super League.</li>
</ul>";
include_once '../templates/game/v1.php';