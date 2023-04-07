<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Zombie Age 2 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La valla ha caído de nuevo, una tras otra, sin importar cuántos zombies que han matado. La ciudad está invadida por los muertos vivientes, y todo el mundo a su alrededor se había convertido en la carne.&nbsp;</p><p>Usted ha venido a darse cuenta de que ya no se puede defender en la casa ya que los zombis son cada vez más enfurecido mientras que la oferta se está acabando. Es el momento de cargar el arma y disparar su camino hacia fuera.</p><p>Descarga&nbsp;<strong>Zombie Age 2 MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y destroza los zombies.</p>";
$info = "<p><strong>Zombie Age 2 MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';