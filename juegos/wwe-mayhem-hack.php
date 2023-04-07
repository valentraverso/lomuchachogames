<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'WWE Mayhem HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3o +";
$texto = "<p>Entra al mundo de lucha libre libre y conoce a los grandes como John Cena o The Rock. Hacelos luchar entre ellos y dale palizas a tus rivales, pero que no te acostumbres a la victoria porque siempre va haber una lucha al doblar la esquina, y no sabes con quien te puedes topar.</p><p>Juega las partida y peleas mas epicas nunca antes vistas en la WWE, y enseña quien es el campeon del cinturon.</p><p>Descarga&nbsp;<strong>WWE Mayhem HACK</strong> para Android gratis en LOMUCHACHOgames y pelea como una superestrella.</p><p>Mas de WWE Mayhem HACK:</p><ul><li>Todos los personajes</li><li>Dinero</li><li>Todo desbloqueado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';