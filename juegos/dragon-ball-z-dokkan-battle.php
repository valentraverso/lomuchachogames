<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'DRAGON BALL Z DOKKAN BATTLE'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>DRAGON BALL Z DOKKAN BATTLE es una de las mejores experiencias de juegos móviles de DRAGON BALL disponibles.&nbsp;</p><p>Este juego de rompecabezas de acción de anime DB presenta hermosas imágenes y animaciones ilustradas en 2D ambientadas en un mundo DRAGON BALL donde la línea de tiempo ha sido arrojada al caos, donde los personajes DB del pasado y el presente se enfrentan cara a cara en nuevas y emocionantes batallas. Experimenta la nueva historia y salva el mundo de DRAGON BALL.</p><p>Descarga&nbsp;<strong>DRAGON BALL Z DOKKAN BATTLE</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y revive las glorosas batallas.</p>";
$info = "<p><strong>DRAGON BALL Z DOKKAN BATTLE</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>JUEGO DE ADICCIÓN SIMPLE</li><li>ACABA A LOS ENEMIGOS CON SUPER ATAQUES</li><li>TUS PERSONAJES FAVORITOS DE DRAGON BALL ESTÁN AQUÍ</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';