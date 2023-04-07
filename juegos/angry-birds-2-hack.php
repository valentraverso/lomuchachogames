<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Angry Birds 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Angry Birds 2 hack apk para Android es un juego muy divertido donde tendrás que lanzar pajaritos a unos cerdos, a los cuales para matarlos tendrás que derribar todas sus construcciones. Estas pueden ser de maderas, piedra y algunas pueden tener dinamita.</p>

<p>Aquí encontrarás todo lo que te encanta de los juegos clásicos de Angry Birds y otras novedades sensacionales. Elige el pájaro que quieras lanzar, juega con tus amigos, intenta niveles multifase y compite y colabora con jugadores de todo el mundo.</p>

<p>Descargar <strong>Angry Birds 2 HACK</strong> ultima version vidas y dinero infito para Android en LOMUCHACHOgames y empeza a tirar pajaritos con tu resortera.</p><p>En el mod apk Angry birds 2.28.1 vas a tener vidas y dinero infinitos, para que los gastes en lo que vos quieras.</p>
<ul>
 	<li>ELIGE TU PÁJARO. Escoge qué pájaro poner en el tirachinas y ¡usa la estrategia para derrotar a los cerdos!</li>
 	<li>NIVELES MULTIFASE. Juega divertidos y apasionantes niveles con múltiples fases; eso sí, ¡cuidado con los cerdos jefe!</li>
 	<li>RETOS DIARIOS. ¿Tienes un minuto? Completa el reto del día y gana recompensas rápidas.
SUBE DE NIVEL a tus pájaros con plumas y aumenta su poder de puntuación. ¡Forma la bandada definitiva!</li>
 	<li>ÚNETE A UN CLAN para cargarte a los cerdos con amigos y jugadores de todo el mundo.
IMPRESIONA A ÁGUILA PODEROSA en el Campamento de entrenamiento de Águila Poderosa y gana monedas para gastarlas en su exclusiva tienda.</li>
 	<li>COMPITE en la ARENA. Diviértete compitiendo contra otros jugadores en plan amistoso lanzando pájaros y demuestra quién es mejor.</li>
 	<li>COLECCIONA RIDÍCULOS SOMBREROS. Consigue sombreros con divertidas temáticas y sube de nivel el estilismo de tus pájaros.</li>
 	<li>CERDITOS MALOS. Los malos de color verde han vuelto más fuertes, más malos y hasta más verdes que nunca.</li>
 	<li>MOGOLLÓN DE NIVELES. Juega cientos de niveles y más que se irán añadiendo en actualizaciones regulares y misiones por tiempo limitado.</li>
 	<li>CLASIFICACIONES. Demuestra quién es el mejor del mundo en las clasificaciones mundiales.</li>
</ul>";
include_once '../templates/game/v1.php';