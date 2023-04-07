<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';

if(isset($_GET['l'])){
$select = "SELECT * FROM userLinks WHERE randomLink = '$_GET[l]'";
$selectC = $conn->query($select);

$num = mysqli_num_rows($selectC);

if($num === 1){
    $s = mysqli_fetch_array($selectC);
    
    include $_SERVER['DOCUMENT_ROOT'].'/templates/linksUser.php';
}else{
    include $_SERVER['DOCUMENT_ROOT'].'/templates/no-found.php';
}
}else{
    
}
?>