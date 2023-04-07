<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hidden Folks MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Busca personas ocultas en paisajes en miniatura, interactivos y dibujados a mano. ¡Abre tiendas para acampar, corta arbustos, abre puertas de un solo golpe y toca algunos cocodrilos.</p><p>Un listado de objetivos te muestra lo que debes buscar. Toca un objetivo para obtener una pista y encuentra suficientes para desbloquear la siguiente área.</p><p>Descarga&nbsp;<strong>Hidden Folks MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y encuentra los mas que puedas.</p>";
$info = "<p><strong>Hidden Folks MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';