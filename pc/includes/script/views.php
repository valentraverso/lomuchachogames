<?php
$getDate = date("m")."-".date("Y");

$getInsights = "SELECT * FROM insights WHERE idPost = '$id'";
$getInsightsC = $conn->query($getInsights);
$getInsightsNum = mysqli_num_rows($getInsightsC);

if($getInsightsNum < 1){
    $insertInsight = "INSERT INTO `insights` (`id`, `idPost`, `views`, `date`) VALUES (NULL, '$id', '1', '$getDate')";
    $conn->query($insertInsight);
}else if($getInsightsNum >= 1){
    $getDateInsights = "SELECT * FROM insights WHERE idPost = '$id' ORDER BY id DESC";
    $getDateInsightsC = $conn->query($getDateInsights);
    $getDateInsightsS = mysqli_fetch_array($getDateInsightsC);
    
    if($getDateInsightsS['date'] === $getDate){
    $updateInsight = "UPDATE insights SET views = views+1 WHERE idPost = '$id'";
    $conn->query($updateInsight);
    }else{
    $insertInsight = "INSERT INTO `insights` (`id`, `idPost`, `views`, `date`) VALUES (NULL, '$id', '1', '$getDate')";
    $conn->query($insertInsight);  
    }
}
?>