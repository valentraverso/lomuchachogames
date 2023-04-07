<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Survivor: Rusty Forest'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>The Survivor: Rusty Forest es el juego donde las supervivencia es lo primordial, un virus afecto a toda la población y tendrás que resistir a los infectados. Sos uno de los pocos que quedo vivo, no desperdicies tu oportunidad de salvar a todos.</p>
<p>En los juegos de supervivencia y terror, los jugadores de “The Survivor” deben explorar el mundo abierto para recoger las materias primas que se necesitan para construir tus propias armas, herramientas, fortificaciones, refugios, etc. Contra los peligros de los zombies, vida silvestre infectada y el mundo sí mismo.</p>
<p>Descarga <strong>The Survivor: Rusty Forest</strong> para Android GRATIS en LOMUCHACHOgames y resistí al virus letal que mato a todos.</p>";
include_once '../templates/game/v1.php';