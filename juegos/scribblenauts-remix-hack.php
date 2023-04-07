<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Scribblenauts Remix HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Ayuda Maxwell adquirir el Starite mediante la creación de cualquier objeto, darle vida y utilizarlo para resolver cada desafío.</p>

<p>Deje volar su imaginación en este juego de puzzle innovador. Convocar a la vida a \', coche alado colosal\' o una \', heladas respiración, hipopótamo robótico tímido\'! Si usted puede pensar, puede crearlo.</p>

<p>Descargar <strong>Scribblenauts Remix HACK </strong>para Android APK + OBB gratis en LOMUCHACHOgames y deja que tu imaginación decida que hacer.</p><p>Scribblenauts Remix APK + OBB Android es un  juego de puzles que te da mucha libertad para que hagas y pases los niveles como quieras y con los objetos que quieras. ¡El mundo que vas a atravesar es muy amplio, por eso vas a tener que prepararte para la aventura!</p>
<ul>
 	<li>MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';