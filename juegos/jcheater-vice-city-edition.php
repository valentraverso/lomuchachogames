<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'JCheater: Vice City Edition'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = '<p>Se trata de una aplicación de terceros no oficial destinado a los tramposos de entrada en el juego GTA Vice City. El juego no está incluido.<br>Abre el teclado en el juego y muestra una lista de trucos disponibles. No hay necesidad de un teclado físico más, todo el mundo puede hacer trampa.</p><p>Descarga <strong>JCheater: Vice City Edition&nbsp;</strong>apk gratis en LOMUCHACHOgames y simplifica el juego.</p><p>Lo que trae JCheater: Vice City Edition gratis:</p><ul><li>Instrucciones<br>1. aplicación tramposo Abrir y presione "Start Cheater".<br>2. Inicie el juego.<br>3. Si bien en el juego pulse el nuevo botón "tramposo" en la parte superior de la pantalla.<br>4. Encuentre el truco que quieres.<br>5. Introducir en el teclado en pantalla que se abre.<br>6. Cuando termine de jugar, abrir la aplicación tramposo de nuevo y pulse "Stop Cheater" para eliminar el botón "Cheat".</li><li>Algunas combinaciones de trucos pueden causar el juego para cerrar ejemplo generando demasiados coches en una ubicación y el uso de varios trucos de armas a la vez.</li></ul>';
include_once '../templates/game/v1.php';