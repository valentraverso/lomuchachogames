<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hidden Folks'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Busca personas ocultas en paisajes en miniatura, interactivos y dibujados a mano. ¡Abre tiendas para acampar, corta arbustos, abre puertas de un solo golpe y toca algunos cocodrilos.</p><p>Un listado de objetivos te muestra lo que debes buscar. Toca un objetivo para obtener una pista y encuentra suficientes para desbloquear la siguiente área.</p><p>Descarga&nbsp;<strong>Hidden Folks</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y encuentra los mas que puedas.</p>";
$info = "<p><strong>Hidden Folks</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>25+ áreas dibujadas a mano</li><li>250+ objetivos para encontrar</li><li>1600+ efectos de sonido hechos con la boca</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "";
include_once '../templates/game/v1.php';