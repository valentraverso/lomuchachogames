<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'This Is the Police'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Sumérgete en una profunda historia de corrupción, crimen e intrigas. Asume el papel del duro oficial de policía Jack Boyd y enfréntate a las entrañas de Freeburg, una ciudad en plena decadencia.</p><p>Experimenta una controvertida historia de corrupción, crimen e intriga. Gestiona tu equipo, responde a emergencias e investiga crímenes en una ciudad al borde del caos. La mafia maquina entre bambalinas, clavando sus garras en la ciudad mientras el alcalde explota cualquier situación para medrar en su carrera política.</p><p>Descarga&nbsp;<strong>This Is the Police</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y representa de mejor manera a la ley.</p><p><strong>This Is the Police</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Tu misión está clara: consigue 500 000 $ en 180 días, antes de que Jack Boyd se retire.</li><li>Decisiones, decisiones, decisiones…&nbsp;</li><li>El bueno, el feo…&nbsp;</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';