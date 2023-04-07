<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom Rush Vengeance HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p> Defiende tu torre del mago Veznan con su Super ejército. En <strong> Kingdom Rush Vengeance HACK </strong> tendrás que defenderte de los ataques de tu enemigo y mostrarte quién es el jefe, </p> <p> Lucha contra los jefes Super, mejorar tus torres y elegir bien a tus tropas. Entra en un mundo colorido, divertido y adictivo para cualquier persona. ¿Realmente eres el mejor defensor de la gente? </p> <p> Descarga <strong> Kingdom Rush Vengeance HACK </strong> gratis para Android en LOMUCHACHOgames y crea estrategias contra tus enemigos </p>.<p> <strong> Kingdom Rush Vengeance HACK </strong> APK + OBB para Android es una gran opción a la hora de elegir estos juegos. Algunas de estas características son: </p> <ul> <li> </li> de juego MOD </ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';