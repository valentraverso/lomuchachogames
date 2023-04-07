<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'This War of Mine'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>En esta guerra de la mina no se juega como un soldado de élite, más bien un grupo de civiles que tratan de sobrevivir en una ciudad sitiada; luchando con la falta de alimentos, medicinas y el peligro constante de francotiradores y carroñeros hostiles. El juego ofrece una experiencia de la guerra vista desde un ángulo completamente nuevo.</p><p>Descarga <strong>This War of Mine&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y trata de sobrevivir.</p><p>Lo que trae This War of Mine gratis:</p><ul><li>Inspirado por los acontecimientos de la vida real</li><li>Controle sus sobrevivientes y gestionar su refugio</li><li>Tomar decisiones - una experiencia a menudo implacable y emocionalmente difíciles</li><li>Mundo caracteres aleatorios y cada vez que inicia un nuevo juego</li></ul>";
include_once '../templates/game/v1.php';