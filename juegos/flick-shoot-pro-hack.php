<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = ''";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>¡Un juego muy adictivo! Flick Shoot Pro es juego de tirar penales muy entretenido, en el menu principal tendras las opciones de un jugador, multijugador y torneo. Una vez elegido solo quedara patear al arco.</p><p>Las gráficas de este juego de fútbol para Android son buenas y las físicas también, ademas el juego debe ser elogiado ya que hace una combinación perfecta entre el jugador que pateara y el arquero que intentera que esa pelota no entre en su arco.</p><p>Podemos decir que Flick Shoot Pro ya de por si es bueno, por lo cual te traemos un apk mod para que el juego se te haga mucho mas divertido y obtengas todo lo que quieras de este maravilloso titulo.</p><p>Descargar <strong>Flick Shoot Pro HACK </strong>1.19 APK con dinero infinito para Android en LOMUCHACHOgames.</p><p>Espera, todavia hay muchas otras cosas que te puede ofrecer este juego de penales.</p><ul><li>¡MAYOR, MEJOR Y MÁS!</li><li>DESAFÍOS EN LÍNEA Y MULTIJUGADOR</li><li>LO MEJOR DEL FÚTBOL</li><li>¡FLICK SHOOT Pro, TU NUEVA ADICCIÓN!</li><li>DINERO INFINITO para que lo gaste en lo que quieras</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';