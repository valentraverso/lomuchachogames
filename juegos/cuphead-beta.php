<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Cuphead Beta'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Cuphead llego a Android, este juego es uno del tipo “corre y dispara” y se centra en matar diversos jefes.</p>

<p>La cámara de visualización es en 2D pero los gráficos del juego son fabuloso y parecen chapados a la antigua. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados con esmero empleando las mismas técnicas de la época, es decir, animación tradicional a mano, fondos de acuarela y grabaciones originales de jazz.</p>

<p>Descargar <strong>Cuphead Beta</strong> 5.1 gratis para Android en LOMUCHACHOgames.</p><p>Lo que trae Cuphead 5.1 para Android:</p>
<ul>
<li>Es un juego de dibujos.</li>
<li>Juegos de música al estilo de los 30′</li>
</ul>";
include_once '../templates/game/v1.php';