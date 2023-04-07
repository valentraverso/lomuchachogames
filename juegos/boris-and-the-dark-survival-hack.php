<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Boris and the Dark Survival HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Juega como Boris the Wolf, el compañero de dibujos animados de Bendy, mientras cazas en el estudio de dibujos animados abandonado por los suministros que Boris necesita para seguir adelante. No estás solo El monstruoso Demonio de tinta te acecha a cada paso.&nbsp;</p><p>Cuidado con el sonido de su corazón latiendo mientras se arrastra por detrás y te atrapa con su mirada goteante. Ningún lugar es seguro. Sin embargo, los secretos acechan a aquellos lo suficientemente aventureros como para buscarlos.</p><p>Descarga&nbsp;<strong>Boris and the Dark Survival</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y descubre los secretos.</p><p><strong>Boris and the Dark Survival</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Supera al Demonio de tinta o conviértete en su próxima víctima.</li><li>Busque materiales y manténgase en movimiento.</li><li>Observe cuidadosamente su resistencia y pare para comer cada vez que tenga la oportunidad.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';