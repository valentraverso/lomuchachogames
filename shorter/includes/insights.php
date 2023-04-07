<?php
include 'conection.php';

$select = "SELECT * FROM insights WHERE idPost = '$idPost'";
$selectC = $conn->query($select);
$selectNum = mysqli_num_rows($selectC);

if($selectNum >= 1){
    
$insert = "UPDATE insights SET views = views+1 WHERE idPost = '$idPost'";
$conn->query($insert);

}else{
    
$insert = "INSERT INTO `insights` (`id`, `idPost`, `views`) VALUES ('NULL', '$idPost', '1')";
$conn->query($insert);

}
?>