<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Pocket Mortys HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Únete a otros Ricks a través del multiverso y flipa con ellos en su última movida: ¡entrenar Mortys! Por ahí sueltos hay más de 70 Mortys de lo más extravagante, a quienes puedes reclutar y entrenar, incluyendo a: Morty Bigotes, Morty Brujo, Morty Cronenberg, y muchos más. Crea tu equipo ideal y desafía a otros Ricks rivales, obligando a vuestros nietos a que luchen entre sí en vuestro nombre.</p><p>Descarga <strong>Pocket Mortys HACK&nbsp;</strong>apk en LOMUCHACHOgames y aventurate.</p><p>Lo que trae Pocket Mortys HACK:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once '../templates/game/v1.php';