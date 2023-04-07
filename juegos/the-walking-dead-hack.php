<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Walking Dead HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Como aparece en TegraZone, The Walking Dead es una serie de juegos de cinco partes (el episodio 2-5 se puede comprar a través de la aplicación) ambientada en el mismo universo que la galardonada serie de Robert Kirkman.&nbsp;</p><p>Juega como Lee Everett, un criminal condenado, a quien se le ha dado una segunda oportunidad de vida en un mundo devastado por los muertos vivientes.</p><p>Descarga&nbsp;<strong>The Walking Dead HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y completa el famoso juego.</p><p><strong>The Walking Dead HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Capítulos Completos</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';