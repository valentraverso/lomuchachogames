<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Football Manager 2020 Mobile'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Dirige tu club a tu manera esta temporada en Football Manager 2020 Mobile, el camino más rápido a la grandeza futbolística. Monta sin esfuerzo tu equipo soñado, gana títulos y siente la adrenalina de camino a la cima del deporte, cuando y donde quieras.</p><p>Incluye más de 60 ligas de 21 de las naciones futbolísticas más importantes con las que podrás optar a la gloria nacional o a grandes aventuras en el extranjero. Tu historia empieza con tu elección de club.</p><p>Descarga&nbsp;<strong>Football Manager 2020</strong> Mobile&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y juega el verdadero futbol.</p><p><strong>Football Manager 2020</strong> Mobile APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVAS LIGAS E IDIOMAS</li><li>RENOVACIÓN DE DESARROLLO JUVENIL</li><li>EQUIPOS RESERVA Y COMPETICIONES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';