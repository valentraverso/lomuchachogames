<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Marsus: Survival on Mars MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Marsus: Survival on Mars es otro juego de Invictus Studio como The Galaxy Survivor, sobrevive en Marte después de que tu nave espacial haya fallado y caído en este planeta rojo. No hay otros criaturas aquí pero te estas quedando sin oxigeno y tendrás que hacerte comida para poder sobrevivir.</p><p>Recolecta objetos y craftea algunos otros con lo recolectado. Pero acordate de buscar cosas para comer porque vas a morir rápido si no lo haces.</p><p>Descargar <strong>Marsus: Survival on Mars MOD</strong> apk + obb en LOMUCHACHOgames y sobrevivi en este planeta de color rojo.</p>";
$info = "<p><strong>Marsus: Survival on Mars MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.2 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';