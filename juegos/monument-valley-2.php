<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Monument Valley 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Guía a una madre y su hija en su periplo a través de arquitecturas mágicas donde descubrirán caminos imposibles y asombrosos rompecabezas mientras desentrañan los secretos de la Geometría Sagrada.<br>Monument Valley 2, la secuela del galardonado Monument Valley, nos invita a vivir una nueva aventura ambientada en un mundo de belleza imposible.&nbsp;</p><p>Descarga <strong>Monument Valley 2</strong> gratis para Android APK + OBB en LOMUCHACHOgames.com. Divertite dando vuelta objetos con forma 3D y que dejaran tu cabeza pensando por horas, lleva a una hija y su mama atraves de arquitecturas descabelladas.</p><p>¿Quieres saber mas sobre Monument Valley 2?</p><ul><li>UNA AVENTURA ORIGINAL</li><li>ROMPECABEZAS ARTESANALES</li><li>APARTADO VISUAL CONTEMPORÁNEO</li><li>SONIDO EVOCADOR</li></ul>";
include_once '../templates/game/v1.php';