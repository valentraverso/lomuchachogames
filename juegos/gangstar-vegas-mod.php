<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Gangstar Vegas MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Corre libremente en un masivo mundo abierto lleno de guerras de pandillas, asalto, vicio, carreras de autos, mafia, acción de arma francotirador, conspiraciones de clanes, disparar contra zombies además de otras acciones complemente divertidas y absolutamente.</p><p>¿Listo para hacer rodar los dados en una vida de crimen? ¡Entonces, la ciudad de Vegas está esperando a un gánster mafioso como tú!</p><p>Descarga&nbsp;<strong>Gangstar Vegas MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y vive a lo gangster.</p>";
$info = "<p><strong>Gangstar Vegas MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once '../templates/game/v1.php';