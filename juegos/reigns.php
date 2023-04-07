<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Reigns'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Les presentamos el nuevos juego llamado Reigns basado en la época medieval donde tendrás que asumir&nbsp;el papel de un rey de la época&nbsp;medieval, se basa en deslizar el dedo hacia la izquierda o hacia la derecha en una carta que representa a un asesor, para aceptar o rechazar su sugerencia aceptándola&nbsp;o denegarla y cada decisión tendrá su consecuencia, cambiando el estilo de la sociedad, la iglesia, la gente, los militares y la riqueza.</p><p>Ten en cuenta ser siempre tactico en tus elecciones y tener en cuenta las consecuencias peligrosas o favorables que se producirán a través de el juego.</p><p>Descarga&nbsp;<strong>Reigns</strong> gratis&nbsp;para Android en LOMUCHACHOgames y conviértete en un exitoso y amado rey medieval.</p><p>Mas de Reigns:</p><ul><li>Cada año que pasas en el trono trae otra importante</li><li>Las decisiones prudentes y bien planificadas ayudan a mantener el reino</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';