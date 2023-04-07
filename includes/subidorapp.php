<?php
if(empty($_POST['nombre'])){
header('location:https://lomuchachogames.com');    
}else{

include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$nombre = $_POST['nombre'];

$select = "SELECT COUNT(nombre) FROM apps WHERE nombre = '$nombre'";
$datan = $conn->query($select);
$fila = mysqli_fetch_array($datan);
$count = $fila['COUNT(nombre)'];
if ($count < 1) {
   //$_POST 
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$keywords = $_POST['keywords'];
$mediafireapk = $_POST['mediafireapk'];
$megaapk = $_POST['megaapk'];
if(!empty($_POST['mediafireobb'])){
   $mediafire = $_POST['mediafireobb'];
    $mediafireobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="' .$mediafire . '" id="mediafireapk">OBB Mediafire</a>
        </div>';
}
if(!empty($_POST['megaobb'])){
    $mega = $_POST['megaobb'];
    $megaobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="' .$mega . '" id="megaapk">OBB Mega</a>
        </div>';
}
$info = $_POST['info'];
$apto = $_POST['apto'];
$tamano = $_POST['tamano'];
$versionandroid = $_POST['versionandroid'];
$nombre = $_POST['nombre'];
$version = $_POST['version'];
$creador = $_POST['creador'];
$texto = $_POST['texto'];

    //Portugues 
    $textopr = str_replace('"', '\"', $_POST['textopr']);
    $infopr = str_replace('"', '\"', $_POST['infopr']);
    $titulopr = $_POST['titulopr'];
    $descripcionpr = str_replace('"', '\"', $_POST['descripcionpr']);
    
//Subidor de Imagenes
    $img = $_FILES['img']['name'];
    $tipe = $_FILES['img']['type'];
    $cd = $_FILES['img']['tmp_name'];
    
//Ruta de destino de las imaganes
    $destino = $_SERVER['DOCUMENT_ROOT'] . '/fotos/';
    
//Movemos del directorio temporal al directorio escogido
    move_uploaded_file($_FILES['img']['tmp_name'], $destino . $img);
    
// Direccion de nuestra foto
    $direccion = "fotos/" . $img;
    
//Cambiar espacios por guiones
    $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
    
//Pagina de juego
    $st = strtolower($texto_guion);
    $link = 'https://lomuchachogames.com/apps/' . $st .'';
    $str = strtolower($link);
    
//Toma las categorias
$pepe = $_POST['categoria1'];
$pep = $_POST['categoria2'];
$pe = $_POST['categoria3'];
$p = $_POST['categoria4'];
$papa = $_POST['categoria5'];
$pap = $_POST['categoria6'];
$pa = $_POST['categoria7'];

//Musica 
if (strlen($pepe) > 1)
{
$hola = '<a href="https://lomuchachogames.com/apps/categorias/musica"><b>Musica</a></b>';
}
//Comunicacion
if (strlen($pep) > 1)
{
$hol = '<a href="https://lomuchachogames.com/apps/categorias/comunicacion"><b>Comunicacion</a></b>';
}
//Citas
if (strlen($pe) > 1)
{
 $ho = '<a href="https://lomuchachogames.com/apps/categorias/citas"><b>Citas</a></b>';
}
//Compras
if (strlen($p) > 1)
{
$h = '<a href="https://lomuchachogames.com/apps/categorias/compras"><b>Compras</a></b>';
}
//Entretenimiento
if (strlen($papa) > 1)
{
$loca = '<a href="https://lomuchachogames.com/apps/categorias/entretenimiento"><b>Entretenimiento</a></b>';
}
//Fotografia
if (strlen($pap) > 1)
{
$loc = '<a href="https://lomuchachogames.com/apps/categorias/fotografia"><b>Fotografia</a></b>';
}
//Personalizacion
if (strlen($pa) > 1)
{
$lo = '<a href="https://lomuchachogames.com/apps/categorias/personalizacion"><b>Personalizacion</a></b>';
}
$post = $hola . $hol . $ho . $h . $loca . $loc . $lo;
//Categorias para la BD
if(strlen($pepe) > 1){
   $faso = 'musica , ';
}
if(strlen($pep)> 1){
    $fas = 'comunicacion , ';
}
if(strlen($pe)> 1){
    $fa = 'citas , ';
}
if(strlen($p) > 1){
    $f = 'compras , ';
}
if(strlen($papa) > 1){
    $niga = 'entretenimiento , ';
}
if(strlen($pap) >1){
    $nig = 'fotografia , ';
}
if(strlen($pa) > 1){
    $ni = 'personalizacion , ';
}

$chan = $faso . $fas . $fa . $f . $niga . $nig . $ni;

//Consulta a BD
    $consulta = "INSERT INTO `apps` (`id`, `categoria`, `nombre`, `tamano`, `version`, `creador`, `publico`, `texto`, `link`, `mediafire apk`, `mega apk`, `stars`) VALUES (NULL, '$chan', '$nombre', '$tamano', '$version', '$creador', '$apto', '$direccion', '$link', '$mediafireapk', '$megaapk', '');";

//Subida de datos
    if (mysqli_query($conn, $consulta)) {
        echo "<p>Registro agregado.</p>";
        header("location: ../apps/$st");
    } else {
        echo 'Error: ' . $conn->error;
        echo "<p>No se agregó...</p>";
    }

//Subida de version
    $meter = "INSERT INTO `version` (`id`, `nombre`, `version`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$nombre', '$version', '$tamano', '$mediafireapk', '$megaapk', '$mediafire', '$mega')";
    $conn->query($meter);

$nen = $_POST['traemod'];
$nene = $_POST['traeobb'];

//Esto es lo que se va a mostrar en la pagina de juego
    $enter = fopen("../apps/$st.php", "x+");
    fwrite($enter, '<?php
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/conection.php\';
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/tomardatos.php\';
$select = "SELECT * FROM apps WHERE nombre = \''.$nombre.'\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "'.$versiondispositivo.'";
$texto = "'.$caca.$info.'";
$mod = "'.$nen.'";
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/apps/v1.php\';');
    fclose($enter);

//Crea pagina en Portugues
    
    $enterp = fopen("../br/apps/$str.php", "x+");
     fwrite($enterp, '
    <?php 
include_once \'../../php/conexion-database.inc.php\';
$select = "SELECT * FROM juegos WHERE nombre = \'' . $nombre . '\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$mediafireapk = $fila[\'mediafire apk\'];
$megaapk = $fila[\'mega apk\'];
if(!empty($fila[\'mediafire obb\'])){
    $mediafire = $fila[\'mediafire obb\'];
}
$mediafireobb = \''.$mediafireobb.'\';
$megaobb = \''.$megaobb.'\';
if(!empty($fila[\'mega obb\'])){
    $mega = $fila[\'mega obb\'];
}
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$creator = $fila[\'creador\'];
$texto = "' . $textopr . '";
$info = "'.$infopr.'";
$versiondispositivo = "'.$versionandroid.'";
$edad = "'.$apto.'";
$title = "'.$titulopr.'";
$description = "'.$descripcionpr.'";
$key = "'.$keywords.'";
$tags = \''.$post.'\';
include_once \'../plantillas/partall.php\';
include_once \'../plantillas/partsobre.php\';
include_once \'../plantillas/part.php\';');
    fclose($enterp);
}else {  $error = '<div class="col-md-8" style="text-align:center;"><div class="alert alert-danger" role="alert">
  <strong>¡Para! </strong>' . $nombre . ' ya esta subido, Si lo queres modificar o actualizar <a href="#" class="alert-link">toca aca.</a>
  </div></div>';
    echo $error 
    . '
    <style>
    #countdown{
        font-size:30px;
    }
    .countdown{
        font-size:30px;
    }
    .vuelta{margin-left:45%;}
    </style>
    <div class="vuelta">
  <span class="countdown">Volviendo en </span><span id="countdown"></span>
  </div>
    <script>
    window.onload = updateClock;

var totalTime = 5;

function updateClock() {
  document.getElementById(\'countdown\').innerHTML = totalTime;
  if(totalTime==0){
    console.log(\'Final\');
     window.location="https://lomuchachogames.com/nueva/admin/creador.php";
  }else{
    totalTime-=1;
    setTimeout("updateClock()",1000);
  }
}
</script>
';
}
}