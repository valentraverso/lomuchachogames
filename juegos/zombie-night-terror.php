<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Night Terror'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "6.0 o +";
$texto = "<p>Un juego altamente innovador con una nueva versión de los juegos de estrategia realzada con un arte de píxel impresionante, un diseño de juego brillante y un toque de locura indie.</p><p>Tu horda zombi obedecerá todas de tus órdenes sin riesgo de huelgas, ni quejas… En la parte negativa, No puedes tener conversaciones acaloradas sobre la película de anoche o sobre los libros más geniales.</p><p>Descarga&nbsp;<strong>Zombie Night Terror</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se un zombie mas.</p><p><strong>Zombie Night Terror</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dirige una horda zombi</li><li>Contaminar</li><li>Sistema de mutación único</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';