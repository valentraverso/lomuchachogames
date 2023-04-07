<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clash Royale'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Clash Royale es otro juego de la compañía Supercell, los creadores de Clash of Clans, y la esta rompiendo. Este titulo consiste en que hay dos jugadores, cada uno con cartas especificas y con 10 puntos de elixir que gastaran para lanzar sus personajes al campo de batalla. El objetivo es destruir las torres enemigas para ganar la partida.</p>

<p>Mejora tus cartas, gana gemas y subí arenas para convertirte en el mejor, también forma clanes con tus amigos, y luchen las batallas de clanes que el  juego le propondrá. Ahora Clash Royale apk trae el modo 2 vs 2 para que juegos junto a tus amigos contra otros enemigos, es mucho mas dinámico que el modo clásico.</p>

<p>Descargar <strong>Clash Royale </strong><strong>2.7.4 </strong>apk para Android en LOMUCHACHOgames y libra batallas épicas.</p><p>Clash Royale apk 2.4.7 tiene las siguientes características que lo hacen un gran juego para Android:</p>
<ul>
 	<li>Desafía a jugadores de todo el mundo a jugar partidas en tiempo real y llévate sus trofeos.</li>
 	<li>Gana cofres para desbloquear recompensas, conseguir nuevas y poderosas cartas y mejorar las que ya tienes.</li>
 	<li>Destruye las torres de tu rival para ganar coronas y conseguir cofres épicos.</li>
 	<li>Reúne y mejora una colección de cartas de la familia de Clash Royale, además de tus tropas, hechizos y defensas favoritos de Clash of Clans.</li>
 	<li>Forma la mejor baraja bélica para derrotar a tus rivales.</li>
 	<li>Progresa a través de las distintas arenas y ábrete paso hasta la cima.</li>
 	<li>Forma un clan para compartir cartas y levanta tu propia comunidad de batalla.</li>
 	<li>Desafía a tus aliados y amigos a duelos privados.</li>
 	<li>Disfruta de los mejores duelos en TV Royale para aprender las diferentes estrategias de batalla.</li>
</ul>";
include_once '../templates/game/v1.php';