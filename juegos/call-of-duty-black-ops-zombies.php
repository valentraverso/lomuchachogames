<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Call of Duty: Black Ops Zombies'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o ";
$texto = "<p>Sumergite en la mejor adaptacion para celulares de las grandiosa compania Activision, con su entrega de COD: BO Zombies para Android.&nbsp;</p><p>Sobrevive a los muertos vivientes nazis despiadados que quieren matarte sea como sea, tambien podes resistir junto con 4 amigos en el grandioso modo multiplayer.</p><p>Descarga &lt;strong&gt;<strong>Call of Duty: Black Ops Zombies</strong>&lt;/strong&gt; gratis en LOMUCHACHOgames y divertite con todos los modos de juego que ofrece este juego de disparos para Android. JUEGA FELIZ.</p><p>Mas de Call of Duty: Black Ops Zombies:</p><ul><li>Comprar puntos bacalao en el menú principal para usar cuando te quedas sin puntos ganados en el juego.</li><li>Los puntos CoD se puede gastar en cualquier cosa en el juego</li><li>Los puntos CoD se perderán si la aplicación se desinstala desde el dispositivo.</li></ul>";
include_once '../templates/game/v1.php';