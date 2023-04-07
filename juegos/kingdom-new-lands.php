
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom New Lands'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Este juego se trata de crear tu propio ejército. Se basa en sobrevivir tantas noches como sea posible, ya que todos los enemigos se acercan golpeando a su derecha en la puerta cuando el sol apenas sale. Los gráficos y la jugabilidad son simples y bastantes pegadizas.</p><p>También puedes charlar con los aldeanos, ya que les gusta hablar con su rey. Sólo necesitas hablar inglés lo suficientemente bien para entender lo que la gente está diciendo y poder hacer algo respecto a ello.</p><p>Descarga&nbsp;<strong>Kingdom: New Lands</strong> para Android gratis y descubre un mundo fascinante.</p>";
$info = "<p>Mas cosas sobre Kingdom: New Lands:</p><ul><li>Un monarca, su montura y una bolsa con monedas</li><li>Monstruos que van a tratar de llevarse tus monedas y tu corona cada todas las noches</li><li>Leales súbditos que te ayudarán a construir, atacar y defender tu reino.</li><li>Mejoras para tu hacienda, diferentes unidades de ataque y defensa, y secretos desparramados por las tierras.</li><li>Una banda sonora exquisita que ha recibido dos menciones de honor del Independent Games FestivalMas cosas sobre Kingdom: New Lands:</li><li>Un monarca, su montura y una bolsa con monedas</li><li>Monstruos que van a tratar de llevarse tus monedas y tu corona cada todas las noches</li><li>Leales súbditos que te ayudarán a construir, atacar y defender tu reino.</li><li>Mejoras para tu hacienda, diferentes unidades de ataque y defensa, y secretos desparramados por las tierras.</li><li>Una banda sonora exquisita que ha recibido dos menciones de honor del Independent Games Festival</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga Kingdom New Lands GRATIS para Android APK full</title><meta name="description" content="Descarga Kingdom New Lands GRATIS para Android APK full. Kingdom New Lands gratis y sin virus para Android."/> <meta name="keywords" content="Kingdom New Lands, RawFury, Android,"></head>
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
                <span style="margin-left:5px;">RawFury</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/accion.php"><b>Accion</a></b><a href="https://lomuchachogames.com/juegos/categorias/aventura.php"><b>Aventura</a></b><a href="https://lomuchachogames.com/juegos/categorias/estrategia.php"><b>Estrategia</a></b> </div>
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
            <span>RawFury</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>5.0.o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="http://swarife.com/18932179/knl1-2-8apk-obb" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="http://swarife.com/18932179/knl1-2-8apk-obbmega" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';