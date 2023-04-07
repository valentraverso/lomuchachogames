
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hustle Castle: Castillo Mágico HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>¡Hazte amo y señor de un auténtico castillo medieval! Admite a nuevos súbditos, asígnales tareas, adiestra y protege a tus hombres y mujeres. Desafía a tus rivales y a las leyes de la física durante la construcción y mejora de tu fortaleza.</p>

<p>Descarga <strong>Hustle Castle: Castillo Mágico HACK </strong>apk en LOMUCHACHOgames y se el mejor rey.</p>";
$info = "<p>Lo que trae Hustle Castle: Castillo Mágico HACK:</p>
<ul>
 	<li>Utilidades Premium</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Hustle Castle: Castillo Mágico HACK GRATIS para Android</title><meta name="description" content="Descarga Hustle Castle: Castillo Mágico HACK GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="Hustle Castle: Castillo Mágico HACK, My.com B.V., Android,"></head>
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
                <span style="margin-left:5px;">My.com B.V.</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/casual.php"><b>Casual</a></b><a href="https://lomuchachogames.com/juegos/categorias/rol.php"><b>Rol</a></b> </div>
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
            <span>My.com B.V.</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>4.1 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>+10</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download949.mediafire.com/hmwgelwy9nqg/jr4h45wklm9fd13/HCCM1.9.1HACKbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://fainbory.com/18932179/hccm-1-9-1hackapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';