<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = '60 Parsecs'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Tu estación espacial está a punto de explotar y solo tienes 60 segundos antes de que las cosas se vuelvan desordenadas.</p><p>60 Parsecs una aventura de ciencia ficción de comedia oscura ambientada en la era espacial atómica, completa con toda la paranoia de la Guerra Fría, acentos de pared cromados y cucarachas con cascos espaciales.</p><p>Descarga&nbsp;<strong>60 Parsecs</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y sobrevive al catastrofe.</p><p><strong>60 Parsecs</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>ESCANEO Y EVACUAR</li><li>SOBREVIVIR Y DECIDIR</li><li>EXPLORAR Y CRAFT</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';