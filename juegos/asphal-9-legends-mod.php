<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Asphal 9 Legends MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Asphalt 9: Legends incluye el mejor reparto de hiper coches reales que puedes manejar como en ningún otro juego, con renombrados fabricantes de autos como Ferrari, Porsche, Lamborghini y W Motors.&nbsp;</p><p>Eres libre de elegir y ser el chofer del coche deportivo de tus sueños que necesitaras para correr rápido a través de espectaculares locaciones en todo el mundo. Entra a la vía rápida y deja tus limites atrás para convertirte en una Leyenda de las Pistas.</p><p>Descarga&nbsp;<strong>Asphal 9 Legends MOD</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y se el mas rapido dentro de la spistas.</p>";
$info = "<p><strong>Asphal 9 Legends MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD Menu</li></ul>";
$versiondispositivo = "4.3 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';