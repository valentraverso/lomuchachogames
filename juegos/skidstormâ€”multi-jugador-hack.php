
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'SkidStorm—Multi-jugador HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>SkidStorm es un juego gratis de velocidad en línea en modo multijugador, cuyas pantallas son sencillas, donde los jugadores pueden jugar tanto juntos como a solas, que cuenta con la jugabilidad de deriva y un manejo fácil.</p>

<p>Trata de ganar a tus contincantes con tactica, trucos,vueltas rapidas, y siempre usando la mentalidad ganadora de un buen corredor de carreras profesional.</p>

<p>Descarga <strong>SkidStorm—Multi-jugador HACK </strong>apk gratis en LOMUCHACHOgames y maneja como el mejor.</p>";
$info = "<p>Lo que trae SkidStorm—Multi-jugador HACK apk para android:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga SkidStorm—Multi-jugador HACK GRATIS para Android</title><meta name="description" content="Descarga SkidStorm—Multi-jugador HACK GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="SkidStorm—Multi-jugador HACK, Cheetah Games, Android,"></head>
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
                <span style="margin-left:5px;">Cheetah Games</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/rol.php"><b>Rol</a></b><a href="https://lomuchachogames.com/juegos/categorias/deportes.php"><b>Deportes</a></b> </div>
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
            <span>Cheetah Games</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download943.mediafire.com/g11lfyx0w1ng/zat8b1bqetqpdk5/SSM1.0.147HACKbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://fainbory.com/18932179/ssm-1-0-147hackapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';