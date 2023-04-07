<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Marvel Strike Force HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Entra al mundo de MARVEL Strike Force 3.8.2 donde se desenvolvelvera un lucha de aliados contra archienimigos en un juego para android lleno de acción. La tierra esta siendo atacada y nuestros heroes se han aliado para salvarla.</p><p>Reune a tu equipo de villanos y superheroes para poder salvar al mundo de sus atacantes que quieren deshacerse de nuestro planeta.</p><p>Descargar&nbsp;<strong>Marvel Strike Force&nbsp;HACK </strong>3.8.2 APK para Android en LOMUCHACHOgames y ayuda a tus personajes favoritos de Marvel.</p><p>Lo que trae <strong>Marvel Strike Force&nbsp;HACK</strong> apk para android:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';