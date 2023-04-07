<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

if($_GET['type'] === 'game'){
    $action = 'juegos';
}else{
    $action = 'apps';
}

/* General variables */
$title = str_replace("", "\'", $_POST['title']);
$developer = $_POST['developer'];
$download = $_POST['donwload'];
$description = $_POST['texto'];
$tags = $_POST['tags'];
$size = $_POST['size'];
$date = $_POST['launch'];
$user = $_POST['user'];

/* Requirement Variables*/
$so = $_POST['so'];
$ram = $_POST['ram'];
$storage = $_POST['storage'];
$processor = $_POST['processor'];
$tarjeta = $_POST['tarjeta'];
$soR = $_POST['soR'];
$ramR = $_POST['ramR'];
$storageR = $_POST['storageR'];
$processorR = $_POST['processorR'];
$tarjetaR = $_POST['tarjetaR'];

$minimiumRequirements = $so.",".$ram.",".$storage.",".$processor.",".$tarjeta;
$recomendedRequirements = $soR.",".$ramR.",".$storageR.",".$processorR.",".$tarjetaR;

/* Link Game */
$linkC = strtolower($title);
$linkCr = str_replace("  ", "-", $linkC);
$linkCre = str_replace("'", "", $linkCr);
$linkCrea = str_replace(" ", "-", $linkCre);
$linkCreat = str_replace(",", "", $linkCrea);
$linkCreat = str_replace(":", "", $linkCreat);
$linkGame = "https://pc.lomuchachogames.com/$action/$linkCreat";

/* Categorias */
$catArray = array();
foreach($_POST['categories'] as $cat){
    array_push($catArray, $cat." ");
}
$categories = implode(",", $catArray);

/* GAleria */
foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; 
			$source = $_FILES["archivo"]["tmp_name"][$key];
			
			mkdir($_SERVER['DOCUMENT_ROOT']."/uploads/$linkCreat", 0777);
			
			$directorio = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$linkCreat.'/';
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}
$array = array();
foreach($_FILES["archivo"]['name'] as $key){
    array_push($array, "https://pc.lomuchachogames.com/uploads/$linkCreat/".$key);
}
$galleryLinks = implode(",", $array);

/* Poster */
$target_path = $_SERVER['DOCUMENT_ROOT']."/uploads/$linkCreat/";
$target_path = $target_path . basename( $_FILES['poster']['name']); 
if(move_uploaded_file($_FILES['poster']['tmp_name'], $target_path)) {
    echo "El archivo ".  basename( $_FILES['poster']['name']). 
    " ha sido subido";
} else{
    echo "Ha ocurrido un error, trate de nuevo!";
}
$posterLink = "https://pc.lomuchachogames.com/uploads/$linkCreat/".$_FILES['poster']['name'];

$insert = "INSERT INTO `$action` (`id`, `title`, `developer`, `categorias`, `description`, `dowload`, `date`, `minimium`, `recomended`, `images`, `poster`, `tags`, `size`, `link`, `uploader`) VALUES (NULL, '$title', '$developer', '$categories', '$description', '$download', '$date', '$minimiumRequirements', '$recomendedRequirements', '$galleryLinks', '$posterLink', '$tags', '$size', '$linkGame', '$user')";
$conn->query($insert);

$selectGame = "SELECT * FROM $action WHERE title = '$title'";
$selectGameConn = $conn->query($selectGame);
$fetchGame = mysqli_fetch_array($selectGameConn);

$pageCreate = fopen($_SERVER['DOCUMENT_ROOT']."/$action/$linkCreat.php", "x+");
$pageWrite = fwrite($pageCreate, '<?php 
include_once $_SERVER[\'DOCUMENT_ROOT\']."/includes/conection.php";

$selectG = "SELECT * FROM '.$action.' WHERE id = \''.$fetchGame['id'].'\'";
$selectGConn = $conn->query($selectG);
$fetchG = mysqli_fetch_array($selectGConn);

include_once $_SERVER[\'DOCUMENT_ROOT\']."/templates/post/game.php";
?>');
fclose($pageCreate);

if($action === 'juegos'){
    $action = 'games';
}

header('location:http://admin.lomuchachogames.com/pc/'.$action);
?>