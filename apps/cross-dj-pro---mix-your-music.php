<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Cross DJ Pro - Mix your music'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>La 1ra app profesional de DJ en Android. Mezcle temas perfectamente sincronizados con un rendimiento del audio excepcional. Desarrollado por Mixvibes, creador de programas y aplicaciones de DJ profesionales desde hace 15 años.</p><p>VERSIÓN LLENA, TODO EL FX INCLUIDO - NINGUNAS COMPRAS ADICIONALES, NINGUNOS POP-UPS. Defina el tiempo maestro para asegurarse de que los antiguos temas se sincronicen correctamente, nueva funcionalidad quantize: los hot cues y bucles están automáticamente al compás.</p><p>Descarga&nbsp;<strong>Cross DJ Pro - Mix your music</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y haz los mejores mix del planeta.</p><p><strong>Cross DJ Pro - Mix your music</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MEZCLE TEMAS PERFECTAMENTE SINCRONIZADOS</li><li>UN RENDIMIENTO DEL AUDIO EXCEPCIONAL</li><li>SISTEMA DE DJ COMPLETO</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';