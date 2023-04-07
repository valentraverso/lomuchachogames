<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Scribblenauts Unlimited'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<pBienvenido al mundo de Scribblenauts Unlmited donde lo que te imagines podra ser plasmado en la pantalla de tu Android, imagina cuanto quieras y explora cuanto quieras. Este juego para Android es una aventura a mundo abierto, donde vas a tener que ayudar a Maxwell a resolver diferentes puzles en diversos niveles.</p>
<p>Invoca el objeto que quieras a tu antojo y si quieres transformarlo puedes hacerlo para que sea lo que tu desees. Ademas conoce sobre la historia de nuestro pequeño personaje.</p>
<p>Descargar <strong>Scribblenauts Unlimited</strong> 1.27 para Android APK + OBB gratis en LOMUCHACHOgames y deja que tu imaginación decida que hacer.</p><p>Scibblenauts Unlimited APK + OBB Android es un  juego de puzles que te da mucha libertad para que hagas y pases los niveles como quieras y con los objetos que quieras. ¡El mundo que vas a atravesar es muy amplio, por eso vas a tener que prepararte para la aventura!</p>
<ul>
<li>Mundo abierto totalmente nuevo: explora un universo abierto con horas ilimitadas de diversión y utiliza todos los niveles como si fueran tu patio para jugar.</li>
<li>Colección de objetos: almacena objetos previamente invocados y tus propias creaciones en la mochila mágica de Maxwell para acceder a ellos fácilmente y usarlos cuando quieras.</li>
<li>Controles optimizados para móviles: pellizca para ampliar la imagen y controla la cámara con dos dedos en escenarios enormes.</li> <li>Interactúa y modifica cualquier objeto en pantalla.</li>
<li>Nuevos personajes exclusivos: ¡disfruta de un viaje en el tiempo con Hipster Lincoln o Robo-Einstein, conviértete en un hombre lobo corporativo o domina desde las alturas con la Reina de los Cielos!</li>
</ul>";
include_once '../templates/game/v1.php';