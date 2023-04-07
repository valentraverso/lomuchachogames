<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Age 2 Premium MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La cerca se ha vuelto a caer, una tras otra, sin importar cuántos zombies hayas matado. La ciudad ahora está invadida por los muertos vivientes, y todos a su alrededor se habían convertido en carne.&nbsp;</p><p>Te has dado cuenta de que ya no puedes defenderte en la casa ya que los zombis se enfurecen más mientras se agota el suministro. ¡Es hora de cargar el arma y salir disparando!</p><p>Descarga&nbsp;<strong>Zombie Age 2 Premium MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y elimina a los zombies.</p>";
$info = "<p><strong>Zombie Age 2 Premium MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "4.0 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';