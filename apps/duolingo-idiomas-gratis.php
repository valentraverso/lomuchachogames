<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Duolingo - idiomas gratis'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Duolingo es la mejor app para Android donde aprender diferentes idiomas es fácil y divertido. Completa diferentes unidades y educate gratuitamente para poder hablar en cualquier país.</p><p>Tienes muchos niveles para avanzar y al final de cada uno tendrás un examen para demostrar lo aprendido en el nivel completado. Habla, escucha, lee y responde con la respuesta correcta, y revisa cual es tu puntuacion final.</p><p>Descargar&nbsp;<strong>Duolingo&nbsp;</strong>apk gratis para Android en LOMUCHACHOgames y aprendes millones de idiomas.</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';