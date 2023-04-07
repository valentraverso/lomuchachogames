
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Code of War: Shooter en línea HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Code of War es el juego de disparos en línea con los mejores gráficos en 3D, física realista y una gran selección de armas reales.Prueba tus habilidades y dominio en la acción dinámica en línea contra otros jugadores de todo el mundo.</p><p>Conviértete en el mejor y logra los primeros sitios en la clasificación mundial.<br>Mejora el dominio y las habilidades de tu combatiente para que se vuelva más poderoso</p><p>Descarga <strong>Code of War: Shooter en línea HACK&nbsp;</strong>apk gratis en LOMUCHACHOgames y elimina a todos.</p>";
$info = "<p>Lo que trae Code of War: Shooter en línea HACK apk + obb para android:</p><ul><li>Jugador Invisible</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Code of War: Shooter en línea HACK GRATIS para Android</title><meta name="description" content="Descarga Code of War: Shooter en línea HACK GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Code of War: Shooter en línea HACK, Extreme Developers, Android,"></head>
    <body>';
include_once '../php/menuentre.php';
echo '
    </div>
<div class="container-fluid">
    <div class="row" >
        <div class="col-xs-4">
            <img class="fotos" src="../'.$img.'">
        </div>
        <div class="col-xs-8" id="principal3s">
            <h1 class="titulo">' . $nombre . '</h1>
                <span style="margin-left:5px;">Extreme Developers</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/rol.php"><b>Rol</a></b> </div>
            <a href="https://lomuchachogames.com"><p class="volver">Volver a LOMUCHACHOgames</p></a>
        </div> 
    </div>
    <div class="row" id="r">
        <div class="col-xs-8" id="v">
            <strong>Version</strong><br>
            <span>'. $version . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Tamaño</strong><br>
            <span>' . $tamano . '</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Creador</strong><br>
            <span>Extreme Developers</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+15</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download752.mediafire.com/a1yil81wqqyg/qbfeb9p5y13er6a/COWSEL3.13HACKbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://onisedeo.com/18932179/cowsel-3-13hackapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download1337.mediafire.com/fedcj5hlu1qg/nblfm5cnv7jthtn/COWSEL3.13HACKbyLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://onisedeo.com/18932179/cowsel-3-13hackobbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';