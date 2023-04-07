
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'LEGO® Friends'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Compra los últimos trajes y accesorios, seleccione el peinado perfecto, la decoración de su dormitorio e incluso elegir una mascota.</p>

<p>Elija cómo pasar sus vacaciones de verano; si usted prefiere asistir a caballo campamento, perfeccionar una rutina de baile, jugar a fútbol, ​​practicar karate, o cuidar de un animal en el centro de rescate, que puede hacer estas cosas y más a medida que expresar su creatividad y crear recuerdos divertidos con su cinco amigos nuevos.</p>

<p>Descargar <strong>LEGO® Friends </strong>apk gratis para Android en LOMUCHACHOgames y haz lo que mas te guste.</p>";
$info = "<p>LEGO® Friends para Android es una gran opcion, algunas características son:</p>
<ul>
 	<li>Desarrolle sus amistades</li>
 	<li>Atención a su mascota</li>
 	<li>Disfruta de la Libertad Total</li>
</ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga LEGO® Friends GRATIS para Android</title><meta name="description" content="Descarga LEGO® Friends GRATIS para Android en todas sus versiones en LOMUCHACHOgames.com"/> <meta name="keywords" content="LEGO® Friends, Warner Bros. International Enterprises, Android,"></head>
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
                <a href="https://lomuchachogames.com/juegos/categorias/casual.php"><b>Casual</a></b> </div>
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
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://download1650.mediafire.com/wkdlv07mpabg/svz837q852pj70n/LEGOFbyLOMUCHACHOgames.apk" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://evassmat.com/18932179/legofapkmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';