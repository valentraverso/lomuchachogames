<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Auto Chess HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Esta es una jugabilidad innovadora creada por Drodo. Al recolectar/cambiar las cartas de Héroe y organizar diferentes formaciones, 8 jugadores de ajedrez competirán por el primer premio en las siguientes decenas de minutos. Millones de jugadores se desafían entre sí todos los días, y se ha convertido en uno de los juegos de ocio más populares actualmente.</p><p>No importa de dónde vengas, bienvenido a nuestro mundo y desafía a los jugadores de todo el mundo.</p><p>Descarga&nbsp;<strong>Auto Chess HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mejor en el tablero.</p><p><strong>Auto Chess HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';