<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PewDiePie’s Tuber Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>PewDiePie’s Tuber Simulator es el juego donde te transformaras en PewDiePie y tendras que ayudarlo con su canal de YouTube a hacerlo crecer. Descarga el apk + obb, empeza a jugar y pasa los retos que este juego de ser un youtuber para Android tiene.</p>
<p>Lleva tu canal a la gloria, no te conviertas en un youtuber despreciado por la gente. Este juego de Youtube es muy divertido y adictivo por lo cual te pasaras horas jugando sin aburrirte ni un segundo.</p>
<p>Descargar <strong>PewDiePie’s Tuber Simulator</strong> ultima version apk + obb en LOMUCHACHOgames.</p><p>PewDIePie’s Tuber Simulator ultima version es el mejor juego de ser youtuber para Android.</p>
<ul>
<li>¡HAZ VÍDEOS y GANA VISUALIZACIONES y SUSCRIPTORES para comprar nuevos OBJETOS como EQUIPAMIENTO, MUEBLES, ROPA e incluso MASCOTAS!</li>
<li>¡CON LA VOZ REAL del mismísimo PewDiePie!</li>
<li>¡COMPLETA MISIONES ÉPICAS para ganar dinero rápidamente!</li>
<li>¡MUESTRA TU INCREÍBLE HABITACIÓN compartiéndola en línea!</li>
<li>¡SIGUE A TUS JUGADORES FAVORITOS y VOTA por ellos en EVENTOS SEMANALES!</li>
<li>¡CONECTA CON AMIGOS y envía o recibe REGALOS CON SWAG!</li>
<li>¡DESAFÍA A TUS AMIGOS en la arena de supervivencia y presume de puntuación en Facebook!</li>
<li>¡JUEGA A PUGGLE, el minijuego más adorable que existe!</li>
<li>¡ASOMBROSA BANDA SONORA CHIPTUNE compuesta por RUSHJET1, compositor de PEWDIEPIE: LEGEND OF THE BROFIST!</li></ul>";
include_once '../templates/game/v1.php';