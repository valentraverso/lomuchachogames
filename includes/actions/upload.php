<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$title = $_POST['title'];
$type = $_POST['type'];

//Check if we already have the same title in the page
$check = "SELECT nombre FROM $type WHERE nombre = '$title'";
$checkC = $conn->query($check);
$checkNum = mysqli_num_rows($checkC);

if($checkNum >= 1){
    header("location:https://admin.lomuchachogames.com/android/games?=$type");
}else{
//User
$user = $_POST['user'];
    
//Games details
$developer = $_POST['developer'];
$size = $_POST['size'];
$version = $_POST['version'];
$androidVersion = $_POST['androidVersion'];
$categories = $_POST['categories'];
$poster = $_POST['poster'];
$age = $_POST['age'];
$relatedWords = $_POST['relatedWords'];

//Link de descarga
$apk1 = $_POST['apk1'];
$apk2 = $_POST['apk2'];
$obb1 = $_POST['obb1'];
$obb2 = $_POST['obb2'];

//Title 
$title = str_replace("'", "\'", $_POST['title']);

//SEO
$tags = $_POST['tags'];

//Description
$desc = str_replace("'", "\'", $_POST['texto']);

//Description Portugues
$descPr = $_POST['textoPr'];

// Link Game 
$linkC = strtolower($title);
$linkCr = str_replace("  ", "-", $linkC);
$linkCre = str_replace("'", "", $linkCr);
$linkCrea = str_replace(" ", "-", $linkCre);
$linkCreat = str_replace(",", "", $linkCrea);
$linkCreat = str_replace(":", "", $linkCreat);
$linkCreate = str_replace("&", "", $linkCreat);
$linkGame = "https://lomuchachogames.com/$type/$linkCreate";

//Upload Image
    $img = $_FILES['poster']['name'];
    $tipe = $_FILES['poster']['type'];
    $cd = $_FILES['poster']['tmp_name'];
//Ruta de destino de las imaganes
    $destino = '../../fotos/';
//Movemos del directorio temporal al directorio escogido
    move_uploaded_file($_FILES['poster']['tmp_name'], $destino . $img);
// Direccion de nuestra foto
    $poster = "https://lomuchachogames.com/fotos/" . $img;

/* Categorias */
$catArray = array();
foreach($_POST['categories'] as $cat){
    array_push($catArray, $cat." ");
}
$categories = implode(",", $catArray);

//Insert the game into database
$insert = "INSERT INTO `$type` (`id`, `categoria`, `nombre`, `relatedWords`,`tamano`, `version`, `versionAndroid`, `creador`, `publico`, `texto`, `description`, `link`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`, `fecha`, `uploader`, `stars`) VALUES (NULL, '$categories', '$title', '$relatedWords', '$size', '$version', '$androidVersion', '$developer', '$age', '$poster', '$desc', '$linkGame', '$apk1', '$apk2', '$obb1', '$obb2', CURRENT_TIMESTAMP(), '$user', '')";
$conn->query($insert);

//Take the id of the inserted game
$search = "SELECT * FROM $type WHERE nombre = '$title'";
$searchC = $conn->query($search);
$s = mysqli_fetch_array($searchC);

$idpost = $s['id'];

//Insert the translation
$insertTraduccion = "INSERT INTO `traducciones` (`id`, `idpost`, `language`, `text`, `type`) VALUES (NULL, '$idpost', 'pr', '$descPr', '$type')";
$conn->query($insertTraduccion);

//Insert the version
$meterla = "INSERT INTO `version` (`id`, `nombre`, `version`, `tamano`, `mediafire apk`, `mega apk`, `mediafire obb`, `mega obb`) VALUES (NULL, '$title', '$version', '$size', '$apk1', '$apk2', '$obb1', '$obb2')";
$conn->query($meterla);

if($type == "apps"){
    $ancho = "apps";
}else{
    $ancho = "game";
}

//Create spanish page
$enter = fopen("../../$type/$linkCreate.php", "x+");
fwrite($enter, '<?php 
include $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/conection.php\';
//Take the game data from data base
$select = "SELECT * FROM '.$type.' WHERE id = '.$idpost.'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
//The template we use for the game page
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/'.$ancho.'/v2.php\';
?>');
fclose($enter);

//Create portuguese page
$enter = fopen("../../br/$type/$linkCreate.php", "x+");
fwrite($enter, '<?php 
include $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/conection.php\';
//Take the game data from data base
$select = "SELECT * FROM '.$type.' WHERE id = '.$idpost.'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
//The template we use for the game page
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/'.$ancho.'/v1.php\';
?>');
fclose($enter);

if($type == "apps"){
    header("location:https://admin.lomuchachogames.com/android/edit?id=$idpost&type=apps&success=2");
}else if($type=="juegos"){
    header("location:https://admin.lomuchachogames.com/android/edit?id=$idpost&type=juegos&success=2");
}
}
?>