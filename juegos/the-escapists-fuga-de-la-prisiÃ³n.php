
    <?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Escapists: Fuga de la prisión'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$mediafireapk = $fila['mediafire apk'];
$megaapk = $fila['mega apk'];
if(!empty($fila['mediafire obb'])){
    $mediafire = $fila['mediafire obb'];
}
if(!empty($fila['mega obb'])){
    $mega = $fila['mega obb'];
}
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$texto = "<p>Bienvenido a The Escapist full apk, acabas de cometer un crimen y tendras que escapar de carcel. Este&nbsp;es un juego único de mundo abierto de fuga carcelaria en el que vivirás entre rejas y vallas con alambre de espino. Se acabó tu vida de crimen, te han atrapado.</p><p>Este es uno de los mejores juegos de mundo abierto de escape carcelario, en el podras hacer todo tipo de cosas. Desde crear una una banda para tu escape hasta ir al baño en tu celda.</p><p>Descarga&nbsp;<strong>The Escapists: Fuga de la prision</strong>&nbsp;full apk gratis para Android en LOMUCHACHOgames y sal de la madlita carcel en la que te encuentras.</p>";
$info = "<p>Lo que trae el&nbsp;The Escapists: Fuga de la prisión ultima version:</p><ul><li>Un juego de simulación de prisión adictivo, roba cucharas o tenedores y úsalos para cavar un túnel.</li><li>Más de 6 prisiones temáticas, intenta escapar de prisiones de mínima seguridad o de espantosas instalaciones como Alcatraz</li><li>Encuentra, roba e intercambia objetos para fabricar docenas de combinaciones para ayudarte en tu fuga</li><li>Aprovecha el patio de ejercicios para aumentar tu fuerza, útil para trepar muros</li><li>Encuentra a otros presos con los que comerciar, necesitarás cinta aislante, un destornillador o limas</li><li>Evita los detectores de contrabando. Si pasas por uno con objetos de contrabando en tu bolsillo, el nivel de alarma subirá al 99 por ciento</li></ul>";
 echo'
    <!DOCTYPE html>
<html>
    <head>
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>       
         ';
include_once '../plantillas/headerjuegos.php';
echo '<title>Descarga The Escapists: Fuga de la prisión GRATIS para Android APK ful</title><meta name="description" content="Descarga The Escapists: Fuga de la prisión GRATIS para Android APK full. The Escapists: Fuga de la prisión gratis y sin virus para Android."/> <meta name="keywords" content="The Escapists: Fuga de la prisión, Team 17 Digital Limited, Android,"></head>
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
                <span style="margin-left:5px;">Team 17 Digital Limited</span>
            <div class="tags">
                <a href="https://lomuchachogames.com/juegos/categorias/estrategia.php"><b>Estrategia</a></b> </div>
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
            <span>Team 17 Digital Limited</span>               
        </div>
        <div class="col-xs-8" id="t">
            <strong>Android</strong><br>
            <span>2.3 o +</span>               
        </div>
        <div class="col-xs-8" id="a">
            <strong>Apto</strong><br>
            <span>Todos</span>               
        </div>
    </div>
    <div class="row" id="buttond">
        <div class="col-xs-6">
               <a target="_blank" rel="external nofollow" href="'.$mediafireapk.'" id="mediafireapk">APK Mediafire</a>
        </div>
        <div class="col-xs-6">
            <a target="_blank" rel="external nofollow" href="'.$megaapk.'" id="megaapk"?id=X>APK Mega</a>
        </div>
        
    </div>';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';