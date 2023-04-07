<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Evoland 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Desde juegos de rol en 2D, pasando por juegos de lucha en 3D hasta un shooter, un juego de cartas y mucho más, te hartarás de saltar de un género de juego a otro, nunca te aburrirás. Evoland 2 no es solo un juego sino muchos, apoyado en una historia que te hará viajar a través del tiempo descubriendo diferentes estilos de arte y tecnología de videojuegos.</p><p>Embárcate en una aventura épica de rol de más de 20 horas a través de la historia de los videojuegos repleta de una tonelada de divertidas referencias a juegos clásicos.</p><p>Descarga&nbsp;<strong>Evoland 2</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recorre este maravilloso juego.</p><p><strong>Evoland 2</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Es una mezcla a gran escala</li><li>Evoland 2 logra combinar a la perfección una increíble cantidad de géneros</li><li>Compatibilidad con la mayoría de los controladores externos bluetooth</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';