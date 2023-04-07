<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Ninjago™ Shadow of Ronin'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Hay una nueva amenaza en Ninjago y se hace llamar Ronin. Con ayuda de su ejército de samuráis oscuros, Ronin roba los recuerdos de los ninjas valiéndose de un arma conocida como Guja de Obsidiana.</p>

<p>Los jugadores deben ayudar a los ninjas a recuperar sus recuerdos y recobrar sus poderes antes de que Ronin complete su plan y libere un mal aún mayor en Ninjago. Los jugadores combatirán en escenarios emblemáticos de la serie de televisión, tales como el Templo de Hielo, los Pantanos Tóxicos y una nueva y misteriosa isla. También, visitarán la aldea montañesa de Spinjago, donde los ninjas están entrenando con el gran Sensei Dareth y el Sensei Wu.</p>

<p>Descargar LEGO® Ninjago™ Shadow of Ronin apk + obb gratis para Android en LOMUCHACHOgames y se un verdadero ninja.</p>
<p>LEGO® Ninjago™ Shadow of Ronin para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>

<ul><li>Explora Ninjago</li>
<li>Las armas de obsidiana</li>
<lI>Villanos clásicos</li>";
include_once '../templates/game/v1.php';