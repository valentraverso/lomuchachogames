<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Los Simpson: Springfield HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1o +";
$texto = "<p>De la mano de los guionistas de los Simpson, ¡te ofrecemos un juego de construcción que te permite crear tu propio Springfield! Homer ha causado una explosión por accidente y ha arrasado con Springfield, y ahora te toca a ti arreglar su estropicio... Es decir, ¡ayudarlo a reconstruirlo!<br>Tu deber ahora es hacer que todo vuelva a la normalidad reconstruyendo todos las casas, edificios, carreteras y organizando a todos los personajes de&nbsp;Springfield en sus respectivos puestos. Simplemente una App divertida que te mantendrá pegado a la pantalla de tu móvil con todas las ocurrencias y locuras tan características de esta famosa serie animada, recuerda&nbsp;Los Simpson™: Springfield necesitan tu ayuda!</p><p>Descargar <strong>Los Simpson: Springfield</strong> HACK 4.38.5 gratis para Android con todo desbloqueado en LOMUCHACHOgames.</p><p>Este es el apk mod de Los Simpsons: Springfield el cual trae:</p><ul><li>Dinero ilimitado para comprar lo que quieras.</li><li>Donas ilimitadas.</li></ul>";
include_once '../templates/game/v1.php';