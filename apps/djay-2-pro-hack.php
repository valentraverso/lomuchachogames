<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'DJAY 2 PRO HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Listo para el rock de su próxima fiesta Introduciendo djay 2 la próxima generación de mayor venta de DJ aplicación del mundo ya está disponible en Android.<br>Djay transforma tu dispositivo Android en un sistema con todas las funciones de DJ. Perfectamente integrado con Spotify y toda la música en su dispositivo, djay le da acceso directo a mezclar tus canciones y listas de reproducción favoritas al instante. Puede tocar en vivo, ficha mezcla sobre la marcha, o activar el modo de Automix para que djay crear una perfecta combinación de forma automática. Si eres un DJ profesional o un principiante que le encanta jugar con la música, djay le ofrece la más intuitiva y potente experiencia de DJ en un dispositivo Android.</p><p>Descarga&nbsp;<strong>DJAY 2 PRO HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta siendo el mejor DJ.</p><p><strong>DJAY 2 PRO HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Mezclador, Tempo, Pitch-Bend filtro y EQ controles</li><li>Automix</li><li>La integración de Spotify</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';