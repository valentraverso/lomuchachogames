<?php
$action = $_POST['action'];

include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

$name = strtolower($_POST['name']);
$idpost = $_POST['idpost'];
$text = $_POST['text'];
$type = $_POST['type'];
$idcomment = $_GET['idcomment'];
$answer = '';
if(isset($_POST['answer'])){
$answer = $_POST['answer'];
}

if($action === "add"){
$comment = "INSERT INTO `comments` (`id`, `name`, `idpost`, `type`, `text`, `answer`) VALUES (NULL, '$name', '$idpost', '$type', '$text', '$answer')";
$conn->query($comment);

$back = "SELECT link FROM juegos WHERE id = '$idpost'";
$backc = $conn->query($back);
$backl = mysqli_fetch_array($backc);

header('location:'.$backl['link']);
}else{
$delete = "DELETE FROM comments WHERE id = '$idcomment'";
$conn->query($delete);
header('location:https://admin.lomuchachogames.com/pc/');
}