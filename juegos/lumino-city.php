<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Lumino City'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Esto es Lumino City, el juego que llevo a muchas personas a un lugar de cartón, papel, luces en miniatura y motores.</p><p>A través de este fascinante entorno se desarrolla una ingeniosa, entrañable y enigmática aventura. El abuelo de Luma, el gerente de la ciudad, ha sido secuestrado. Para encontrarlo, debes explorar la ciudad y descifrar los secretos de los mecanismo que hacen que este mundo se mueva.</p><p>Descargar&nbsp;<strong>Lumino City&nbsp;</strong>apk + obb gratis en LOMUCHACHOgames y sumergite en esta gran aventura.</p><p>Lo que trae Lumino City 1.2.9:</p><ul><li>UNA CIUDAD COMPLETAMENTE CREADA A MANO.</li><li>UN PRECIOSO MUNDO ÚNICO POR EXPLORAR.</li><li>PUZLES QUE INSPIRAN FASCINACIÓN.</li></ul>";
include_once '../templates/game/v1.php';