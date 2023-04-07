<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Jóvenes titanes Figúrate'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.1 o +";
$texto = "<p>Alguien está tratando de llevar a la quiebra a los Minititanes. Empieza a ganar batallas para llegar al fondo de este misterio. Llegó la versión beta del modo multijugador.&nbsp;</p><p>Ya te enfrentaste a los héroes más grandes del mundo. Ahora, ¡puedes desafiar a tus amigos y enfrentarlos en minibatallas! Sube de rango para desbloquear las figuras de la Legión del Mal. Busca más de 90 figuras de los Minititanes, como Batman, Superman, la Mujer Maravilla, Flash, los Titanes Radicales.</p><p>Descarga&nbsp;<strong>Jóvenes titanes Figúrate</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y sal victorioso de la batallas.</p><p><strong>Jóvenes titanes Figúrate</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>DESAFÍA A TUS AMIGOS</li><li>MÁS DE 90 FIGURAS PARA COLECCIONAR</li><li>PERSONALIZA TU EQUIPO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';