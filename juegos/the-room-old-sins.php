<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Room: Old Sins'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Entra en <strong>The Room: Old Sins</strong> y conoce un mundo basado en la exploración táctil con puzles desafiantes y una historia cautivadora.<br>Un ambicioso ingeniero y su adinerada mujer desaparecen súbitamente, lo que da comienzo a la caza de un preciado artefacto.&nbsp;</p><p>El rastro lleva hasta el ático de su hogar, donde se encuentra una vieja casa de muñecas de lo más peculiar.<br>Explora lugares inquietantes, sigue pistas misteriosas y manipula artilugios extravagantes para desentrañar los misterios de la mansión Waldegrave.</p><p>Descarga&nbsp;<strong>The Room: Old Sins</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y resuelve todos los acertijos.</p><p><strong>The Room: Old Sins</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>EL ROMPECABEZAS DEFINITIVO</li><li>OBJETOS EXTRAÑOS</li><li>DISEÑO RÁPIDO Y SENCILLO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';