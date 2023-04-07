<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Football Manager 2020 Touch'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Football Manager 2020 Touch es la manera más directa de ponerte al timón de los mejores clubes de fútbol del mundo. Instintivo y envolvente, Football Manager 2020 Touch te proporciona toda la emoción de un juego de PC en un formato simplificado y accesible. Te permite planificar tu camino hasta la cima del deporte estés donde estés, ya sea el transporte público o durante un merecido descanso.&nbsp;</p><p>Los mejores jugadores del mundo están literalmente en tus manos: tú decides si prefieres gangas y agentes libres de renombre, o si exprimes la más amplia base de datos del mercado para fichar promesas de cara al futuro.&nbsp;</p><p>Descarga&nbsp;<strong>Football Manager 2020 Touch</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y disfruta del futbol.</p>";
$info = "<p><strong>Football Manager 2020 Touch</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>CENTRO DE DESARROLLO</li><li>VISIÓN DEL CLUB</li><li>MEJORAS GRÁFICAS</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "";
include_once '../templates/game/v1.php';