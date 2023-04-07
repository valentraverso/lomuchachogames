<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Age 3 Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Vuelve la impresionante saga Zombie Age con zombis mucho más salvajes, armas mortíferas y héroes únicos. Disfruta de una masacre de zombis a tu manera. Si ibas buscando el mejor juego de matar zombis.</p><p>Así que sigues con vida... ¡Enhorabuena!... ¿Pero por cuánto tiempo si te superan tan claramente en número? ¿Qué piensas hacer?... ¿Seguir actuando como un héroe solitario matando a todos los zombis que te encuentres en tu camino? Confía en mí: ¡no ibas a durar ni dos días! Ya no se trata de sobrevivir a este apocalipsis zombi; se trata de ganar esta guerra.</p><p>Descarga&nbsp;<strong>Zombie Age 3 Premium</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y sobrevive.</p>";
$info = "<p><strong>Zombie Age 3 Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Disfruta de una masacre de zombis de muchas maneras diferentes.</li><li>Modo de juego cooperativo con tus amigos.</li><li>Más de treinta armas mortíferas a tu disposición.</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once '../templates/game/v1.php';