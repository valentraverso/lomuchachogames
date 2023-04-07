<?php
if(empty($_POST['nombre'])){
header('location:https://lomuchachogames.com');    
}else{

include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

//$_POST
$nombre = $_POST["nombre"];
$select = "SELECT COUNT(nombre) FROM juegos WHERE nombre = '$nombre'";
$datan = $conn->query($select);
$fila = mysqli_fetch_array($datan);
$count = $fila['COUNT(nombre)'];
if ($count < 1) {
    $titulo = $_POST['titulo'];
    $descripcion = str_replace('"', '\"', $_POST['descripcion']);
    $keywords = $_POST['keywords'];
    $mediafireapk = $_POST['mediafireapk'];
    $megaapk = $_POST['megaapk'];
    $mediafire = $_POST['mediafireobb'];
    $mega = $_POST['megaobb'];
    if (!empty($mediafire)) {
        $mediafireobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;" rel="external nofollow" href="\' . $mediafire . \'" id="mediafireapk">OBB Mediafire</a>
        </div>';
    }
    if (!empty($mega)) {
        $megaobb = '<div class="col-xs-6">
            <a target="_blank" style="margin-top:5px;"  rel="external nofollow" href="\' . $mega . \'" id="megaapk">OBB Mega</a>
        </div>';
    }
    $info = str_replace('"', '\"', $_POST['info']);
    $apto = $_POST['apto'];
    $tamano = $_POST['tamano'];
    $versionandroid = $_POST['versionandroid'];
    $version = $_POST['version'];
    $creador = $_POST['creador'];
    $texto = str_replace('"', '\"', $_POST['texto']);
    $nombrere = str_replace('\"', '"', $_POST['nombre']);
    //Portugues 
    $textopr = str_replace('"', '\"', $_POST['textopr']);
    $infopr = str_replace('"', '\"', $_POST['infopr']);
    $titulopr = $_POST['titulopr'];
    $descripcionpr = str_replace('"', '\"', $_POST['descripcionpr']);
    //Ingles
    $textoen = str_replace('"', '\"', $_POST['textoen']);
    $infoen = str_replace('"', '\"', $_POST['infoen']);
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
    $stf = str_replace("'", "", $texto_guion);
        $str = strtolower($stf);
//Pagina de juego
    $link = 'https://lomuchachogames.com/juegos/' . $str;
    $st = strtolower($texto_guion);

//Toma las categorias
    $pepe = $_POST['categoria1'];
    $pep = $_POST['categoria2'];
    $pe = $_POST['categoria3'];
    $p = $_POST['categoria4'];
    $papa = $_POST['categoria5'];
    $pap = $_POST['categoria6'];
    $pa = $_POST['categoria7'];

//Aciion 
    if (strlen($pepe) > 1) {
        $hola = '<b>Accion</b>';
    }
//Aventura
    if (strlen($pep) > 1) {
        $hol = '<b>Aventura</b>';
    }
//Estrategia
    if (strlen($pe) > 1) {
        $ho = '<b>Estrategia</b>';
    }
//Casual
    if (strlen($p) > 1) {
        $h = '<b>Casual</b>';
    }
//Simulacion
    if (strlen($papa) > 1) {
        $loca = '<b>Simulacion</b>';
    }
//Rol
    if (strlen($pap) > 1) {
        $loc = '<b>Rol</b>';
    }
//Deportes
    if (strlen($pa) > 1) {
        $lo = '<b>Deportes</b>';
    }
    $post = $hola . $hol . $ho . $h . $loca . $loc . $lo;
//Categorias para la BD
    if (strlen($pepe) > 1) {
        $faso = 'accion , ';
    }
    if (strlen($pep) > 1) {
        $fas = 'aventura , ';
    }
    if (strlen($pe) > 1) {
        $fa = 'estrategia , ';
    }
    if (strlen($p) > 1) {
        $f = 'casual , ';
    }
    if (strlen($papa) > 1) {
        $niga = 'simulacion , ';
    }
    if (strlen($pap) > 1) {
        $nig = 'hack , ';
    }
    if (strlen($pa) > 1) {
        $ni = 'deportes , ';
    }

    $chan = $faso . $fas . $fa . $f . $niga . $nig . $ni;
//Consulta a BD
    $consulta = "INSERT INTO `juegos` (`id`, `categoria`, `nombre`, `tamano`, `version`, `creador`, `publico`, `texto`, `link`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`, `status`, `fecha`, `stars`) VALUES (NULL, '$chan', '$nombrere', '$tamano', '$version', '$creador', '$apto', '$direccion', '$link', '$mediafireapk', '$megaapk', '$mediafire', '$mega', '', 'CURRENT_TIMESTAMP', '');";
//SUbida de datos
    if (mysqli_query($conn, $consulta)) {
        echo "<p>Registro agregado.</p>";
        header("location: ../juegos/$str");
    } else {
        echo 'Error: ' . $conn->error;
        echo "<p>No se agregó...</p>";
    }
    
    //Subida de version
    $meter = "INSERT INTO `version` (`id`, `nombre`, `version`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$nombre', '$version', '$tamano', '$mediafireapk', '$megaapk', '$mediafire', '$mega')";
    mysqli_query($conn, $meter);

include_once $_SERVER['DOCUMENT_ROOT'].'/en/includes/conection.php';    
    
    $direcciona = "https://lomuchachogames.com/fotos/" . $img;
    $linka = 'https://en.lomuchachogames.com/games/' . $str;
    
//Consulta a BD
 $nomade = $textoen.$infoen;
    $consultaar = "INSERT INTO `juegosen` (`id`, `categoria`, `nombre`, `tamano`, `version`, `creador`, `publico`, `texto`, `link`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`, `status`, `fecha`, `description`)  VALUES (NULL, '$chan', '$nombrere', '$tamano', '$version', '$creador', '$apto', '$direcciona', '$linka', '$mediafireapk', '$megaapk', '$mediafire', '$mega', '', '', '$nomade');";
    $conn->query($consultaar);

//Subida de version
    $meterla = "INSERT INTO `version` (`id`, `nombre`, `version`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$nombre', '$version', '$tamano', '$mediafireapk', '$megaapk', '$mediafire', '$mega')";
   $conn->query($meterla);

/* Si trae MOD*/
     if(!empty($_POST['traemod'])){
         $mod = $_POST['traemod'];
         $mododi = "MOD";
     }
     
//Esto es lo que se va a mostrar en la pagina de juego
    $enter = fopen("../juegos/$str.php", "x+");
    fwrite($enter, '<?php 
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/conection.php\';
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/tomardatos.php\';
$select = "SELECT * FROM juegos WHERE nombre = \'' . $nombre . '\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "' . $texto . '";
$info = "'.$info.'";
$versiondispositivo = "'.$versionandroid.'";
$mod = "'.$mododi.'";
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/game/v1.php\';');
    fclose($enter);
     $enterp = fopen("../br/juegos/$str.php", "x+");
    fwrite($enterp, '<?php 
include_once \'../../includes/conection.php\';
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
     $enteren = fopen("../en/games/$str.php", "x+");
    fwrite($enteren, '<?php 
include_once \'../includes/conection.php\';
$select = "SELECT * FROM juegosen WHERE nombre = \'' . $nombre . '\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$creator = $fila[\'creador\'];
$title = "Download '.$nombre.' APK '.$mod.$traeobb.' - LOMUCHACHOgames";
$description = "Download '.$nombre.' APK '.$mod.$traeobb.'. Download '.$nombre.' for Android Free.";
$key = "'.$keywords.'";
$tags = \''.$post.'\';
$versiondispositivo = "'.$versionandroid.'";
include_once "../templates/game/v1.php";');
    fclose($enteten);
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