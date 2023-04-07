<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Identity V HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Cuatro sobrevivientes: correr desde el despiadado cazador, cooperar con compañeros de equipo, descifrar máquinas de cifrado, abrir la puerta y escapar.<br>Un cazador: familiarízate con todos tus poderes asesinos. Esté preparado para atrapar y torturar a sus presas. El primer juego móvil de terror asimétrico desarrollado por NetEase. Con un estilo de arte gótico, historias misteriosas y un juego emocionante 1vs4, Identity V te traerá una experiencia impresionante.</p><p>Múltiples personajes para elegir, personajes personalizados para adaptarse a su propia estrategia personal y obtener la victoria final.</p><p>Descarga&nbsp;<strong>Identity V HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y descubre esta aventura.</p><p><strong>Identity V HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Estilo visual gótico</li><li>Ajustes de fondo convincentes</li><li>Ajustes de mapas aleatorizados</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';