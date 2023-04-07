<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stomped HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Clávalo combina lo mejor del snowboard y del skateboard en una experiencia superior. Ábrete paso por impresionantes paisajes montañosos, desciende picos tormentosos haciendo nose-slide y cruza abismos letales a golpe de kickflip.&nbsp;</p><p>Encuentra tu ritmo encadenando combos gigantescos a velocidad de vértigo, pero no olvides CLAVAR el aterrizaje. Clávalo te pondrá pulsaciones a mil mientras saltas barrancos enormes y te marcas unos flips por incontables escenarios espectaculares.</p><p>Descarga&nbsp;<strong>Stomped HACK</strong> apk en su ultima version&nbsp;en LOMUCHACHOgames y domina las pistas.</p><p><strong>Stomped HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';