<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Magic Tiles 3 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Prepárate para uno de los mejores juegos de piano del mundo, ajustado a tu medida.<br>Magic Tiles 3 &nbsp;es uno de los juegos de piano más aclamados de entre los miles de juegos gratuitos de 2019, con más de 100 millones de jugadores en todo el mundo.&nbsp;</p><p>Es un juego especial en su clase: combina diferentes instrumentos, como la guitarra, la batería y, por supuesto, ¡el piano! Además, es uno de los juegos de piano más populares, con temas de alta calidad y una fabulosa jugabilidad.</p><p>Descarga&nbsp;<strong>Magic Tiles 3 HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y llega lo mas rápido posible.</p><p><strong>Magic Tiles 3 HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';