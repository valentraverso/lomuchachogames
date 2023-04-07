<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'MARVEL Strike Force'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Entra al mundo de MARVEL Strike Force 3.0.0 donde se desenvolvelvera un lucha de aliados contra archienimigos en un juego para android lleno de acción. La tierra esta siendo atacada y nuestros heroes se han aliado para salvarla.</p>

<p>Reune a tu equipo de villanos y superheroes para poder salvar al mundo de sus atacantes que quieren deshacerse de nuestro planeta.</p>

<p>Descargar <strong>Marvel Strike Force </strong>3.0.0 APK para Android en LOMUCHACHOgames y ayuda a tus personajes favoritos de Marvel.</p><p>Lo que trae Marvel Strike Force apk para android:</p>
<ul>
 	<li>Reune a tu escuadron</li>
 	<li>Lucha combates epicos</li>
 	<li>experimenta graficos realistas</li>
</ul>";
include_once '../templates/game/v1.php';