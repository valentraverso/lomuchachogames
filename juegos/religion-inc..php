<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Religion inc.'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>La humanidad siempre ha tenido la necesidad de creer en algo más grande de lo que es. Buscó la luz que lo guiaría a través de la oscuridad milenaria. La fe siempre ha sido esta luz para millones de personas.&nbsp;</p><p>La religión ayudó a las personas a superar las dificultades de la vida; ayudó a encontrar la paz y la felicidad. Hay muchas religiones en el mundo. Cada uno de ellos da diferentes respuestas a las preguntas que las personas hacen a lo largo de su vida.</p><p>Descarga&nbsp;<strong>Religion inc.</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y comparte la religión del señor.</p><p><strong>Religion inc.</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Elige un país donde comienza tu religión</li><li>Gana \"Puntos de iluminación\" y desarrolla tu religión</li><li>Adquiere diferentes habilidades: desde diferentes formas de difundir tu religión hasta milagros divinos.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';