<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Last Day on Earth HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Descarga Last Day on Earth: Survival mod apk ultima version para Android en LOMUCHACHOgames y divertirte con este juego multijugador en linea de mundo abierto. Tu mision sobrevivir a los zombis que quieren matarte sin piedad, ¿Cuanto puedes resistir al ataque sin morir?</p>
<p>En este mundo solo puedes confiar en ti y en tu clan, elige las mejores armas y destruye muertos vivientes en Last Day. Este HACK de last day on earth te va permitir comprar lo que quieras sin limite, tambien monedas infinitas y muchas cosas mas. Lo mejor es que este hack incluye apk y obb en unos solo para que no tengas que descargar millones de archivos.</p>
<p>Descarga <strong>Last Day On Earth</strong> HACK 1.11.12 para Android en LOMUCHACHOgames y segui disfrutando cosas ilimitadas.</p>";
include_once '../templates/game/v1.php';