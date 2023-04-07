<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

if(isset($_GET['code'])){
    $code = $_GET['code'];
}else{
$code = $_POST['code'];
}

if($code == 0){
$text = $_POST['text'];
$page = $_POST['page'];

$update = "INSERT INTO `updates` (`id`, `text`, `page`, `status`) VALUES (NULL, '$text', '$page', '0')";
$conn->query($update);
}else if($code == 1){
    $id = $_GET['id'];
    
    $updateUpdate = "UPDATE updates SET status = '1' WHERE id = '$id'";
    $conn->query($updateUpdate);
}else if($code == 2){
    $id = $_GET['id'];
    
    $updateUpdate = "UPDATE updates SET status = '0' WHERE id = '$id'";
    $conn->query($updateUpdate);
}

header("location:https://admin.lomuchachogames.com/home/updates");