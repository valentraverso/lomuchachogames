<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'RPGolf HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Érase una vez un reino pacífico, armonioso y con una pasión desmedida por el mejor deporte del mundo: el golf. En aquel reino, se pasaban día y noche jugando al golf, de tal modo que el propio reino acabaría convertido en el circuito de golf más hermoso que jamás se hubiese visto. Todo el mundo era feliz en aquel reino maravilloso.</p><p>Al obsesionarse tanto con el golf, la gente se volvió complaciente y el reino se quedó expuesto a ataques.&nbsp;</p><p>Descarga&nbsp;<strong>RPGolf HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta el golf.</p><p><strong>RPGolf HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Gráficos de estilo retro</li><li>Controles sencillos e intuitivos</li><li>9 hoyos de golf esperando a ser descubiertos en el mapa del mundo.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';