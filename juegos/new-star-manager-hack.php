<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'New Star Manager HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Ahora no solo podras ser un jugador sino que tambien seras el lider, manager, DT o quieras llamarlo del equipo, todo el club necesita de tus habilidades para llevar a este equipo de futbol adelante.&nbsp;</p><p>En New Star Manager pondras a prueba tus habilidades para liderar el plantel y llevarlo a la victoria o si quieres mas, a ser el mejor equipo del mundo.</p><p>&nbsp;</p><p>Descarga hoy <strong>New Star Manager HACK</strong> hackeado en LOMUCHACHOgames y haz que todo se mucho mas facil para ti!!</p><p>Se el mejor equipo del mundo.</p>";
include_once '../templates/game/v1.php';