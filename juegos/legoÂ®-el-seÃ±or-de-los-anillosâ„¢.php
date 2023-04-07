
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® El Señor de los Anillos™'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Concebidas con el humor y la interminable variedad de la experiencia de juego LEGO, sigue las líneas de la Trilogía del Señor de los Anillos original. Revive la leyenda de la Comunidad del Anillo, las dos Torres, y el regreso del Rey por medio de minifiguras LEGO, mientras exploran maravillas y resuelven adivinanzas.</p>

<p>Los orcos y algunas cosas repugnantes te esperan en este camino arriesgado hacia el Monte del Destino, aunque, una comunidad será formada en este recorrido: el guerrero Aragorn, el mago Gandalf, el elfo Legolas, el enano Gimli, el Hombre de Gondor, Boromir, y los amigos de Frodo el hobbit, Sam, Merry y Pippin, todos se unirán a lo largo de la misión para destruir el Anillo y regresar la paz a la tierra.</p>

<p>Descargar <strong>LEGO® El Señor de los Anillos™ </strong>apk + obb gratis para Android en LOMUCHACHOgames y salava ala tierra.</p>";
$info = "<p>LEGO® El Señor de los Anillos™ para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>EL ÚNICO ANILLO</li>
 	<li>MINIFIGURAS PARLANTES</li>
 	<li>EXPLORACIÓN</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga LEGO® El Señor de los Anillos™ GRATIS para Android</title><meta name="description" content="Descarga LEGO® El Señor de los Anillos™ GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="LEGO® El Señor de los Anillos™, Warner Bros. International Enterprises, Android,"></head>
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
                <span style="margin-left:5px;">Warner Bros. International Enterprises</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b><a href="https://lomuchachogames.com/juegos/categorias/aventura.php"><b>Aventura</a></b> </div>
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
            <span>Warner Bros. International Enterprises</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.0.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1127.mediafire.com/prmje4bjapag/9t8baev9l8hi916/LEGOESDLAbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/legoesdlaapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="http://download1339.mediafire.com/q2q3ujf382tg/124hmw4qjwr57bc/LEGOESDLAbyLOMUCHACHOgames.zip" id="mediafireapk">OBB Mediafire</a>
        </div><div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="http://evassmat.com/18932179/legoesdlaobbmega" id="megaapk">OBB Mega</a>
        </div>
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';