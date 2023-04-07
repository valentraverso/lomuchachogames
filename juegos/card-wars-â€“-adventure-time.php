
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Card Wars – Adventure Time'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Bienvenido al mundo de Adventure Time y a su magico juegos de cartas que siempre quisiste jugar mientras veias la tele: Card Wars. Descarga Card Wars para Android, el juegos favorito de Jake, en LOMUCHACHOgames.</p><p>Como puede que hayas visto en&nbsp;Hora de Aventuras, las épicas batallas de&nbsp;Card Wars&nbsp;tienen lugar en un área de juego dividida en cuatro Carriles. El objetivo del juego es dañar a tu oponente hasta que sus Puntos de Vida, que empiezan en 25, lleguen a 0<i>.&nbsp;</i> Y si lo logras dominaras en Card Wars.</p><p>Descargar <strong>Card Wars - Adventure Time </strong>de Cartoon Network GRATIS ultima versión para Android en LOMUCHACHOgames y pelea contra todos los enemigos de Fynn y Jake.</p>";
$info = "<p>¿Queres saber mas sobre Card Wars?:</p><ul><li>LUCHA CON CRIATURAS ÉPICAS</li><li>ACCIÓN MULTIJUGADOR</li><li>LABORATORIO DE CRIATURAS</li><li>ESCOGE A TU HÉROE</li><li>EVENTOS ESPECIALES</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descargar Card Wars - Hora de Aventura GRATIS para Android </title><meta name="description" content="Descarga Adventure Time - Guerra de Cartas para Android GRATIS '.$version.'  APK + OBB, empieza la guerra de cartas, Fynn y Jake te esperan para jugar."/> <meta name="keywords" content="Card Wars, descargar Guerra de cartas, juegos gratis para android,"></head>
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
                <span style="margin-left:5px;">Cartoon Network</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b><a href="https://lomuchachogames.com/juegos/categorias/simulacion.php"><b>Simulacion</a></b> </div>
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
            <span>Cartoon Network</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.3.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1875.mediafire.com/utsalew4sm5g/8ddm56s9y9k1gkx/Card+Wars+-+Adventure+Time+v1.11.0byLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://zipansion.com/18932179/cardwasrmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download981.mediafire.com/xqxm2mw1mcjg/tedv7mruurl0f90/CardWarsOBBbyLOMUCHACHOgames.rar" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://zipansion.com/18932179/cardwarsobbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';