<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'My Talking Angela HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Báñala, decora su casa y aliméntala con comida deliciosa para que pueda crecer hasta convertirse en una gata bella y saludable. Diviértete bailando, jugando fantásticos minijuegos y solucionando puzles.&nbsp;Puedes colectar hermosos cromos en tu álbum e intercambiarlos con tus amigos y amigas.Sale de compras en busca del vestido y los zapatos perfectos y dale un cambio de imagen estiloso combinando su conjunto con un peinado y un maquillaje adorables.</p><p>Descarga <strong>My Talking Angela HACK&nbsp;</strong>apk en LOMUCHACHOgames y diviertete.</p><p>Lo que trae My Talking Angela HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';