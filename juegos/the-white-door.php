<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The White Door'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.1 o +";
$texto = "<p>Robert Hill despierta en un instituto de salud mental, sufriendo una severa amnesia. Sigue la estricta rutina diaria del instituto, explora sus sueños y ayúdale a recuperar sus recuerdos.&nbsp;</p><p>The White Door es una nueva aventura de point-and-click desarrollada por los creadores de la serie Cube Escape y Rusty Lake.</p><p>Descarga&nbsp;<strong>The White Door</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recupera a Robert.</p><p><strong>The White Door</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Jugabilidad simple e intuitiva</li><li>Historia interactiva</li><li>Atmósfera absorbente</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';