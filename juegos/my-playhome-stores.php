<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'My PlayHome Stores'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>En My PlayHome Stores tu hijo va a poder recorrer tiendas y comprar sin salir de casa. Solo tenes que descargar el apk gratis y vas a poder jugar a My PlayHome.</p>

<p>Toma un helado de tu color preferido, cambia tu ropa y actualizate o hace una deliciosa bebida de jugos de frutas en la tienda de liquados.</p>

<p>Descarga <strong>My PlayHome Stores </strong>apk gratis en LOMUCHACHOgames y dale a tu hijo el mejor juego infantil que hay para Android.</p><p>My PlayHome Stores es uno de los juegos infantiles mas descargados, por su interfaz amigables y fácil modo de juego. Deja que tu hijo vaya de compras desde la comodidad de tu casa, y que recorras muchas tiendas.</p>

<p>Este juego no tiene límites de tiempo, puntuaciones o power-ups. Sólo juego libre que alimenta la imaginación de su hijo.</p>";
include_once '../templates/game/v1.php';