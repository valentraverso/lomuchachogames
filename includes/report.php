<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
if(!empty($_GET['act'])){
            $delete = "DELETE FROM `report` WHERE `report`.`id` = $_GET[act]";
            $conn->query($delete);
            header("location:https://admin.lomuchachogames.com/android/?success=2");
}else{
 $tipo = $_POST['tipo'];
 $idpost = $_POST['id'];
 $report = $_POST['report'];
 $desc = $_POST['desc'];
 
 if($report == "act"){
      $timesReported = "SELECT * FROM report WHERE idpost = '$idpost' AND report.desc = 'Nueva actualización disponible.' AND tipo = '$tipo'";
      $timesReportedConn = $conn->query($timesReported);
      $timesReportedN = mysqli_num_rows($timesReportedConn);
     if($timesReportedN == 0){
     $insert = "INSERT INTO `report` (`id`, `idpost`, `timeReported`, `tipo`, `desc`, `fecha`) VALUES (NULL, '$idpost', '1', '$tipo', 'Nueva actualización disponible.', CURRENT_TIMESTAMP())";
     $conn->query($insert);
     }else if($timesReportedN > 0){
     $update = "UPDATE report SET timeReported = 'timeReported'+1 WHERE idpost = '$idpost' AND report.desc = 'Nueva actualización disponible.' AND tipo = '$tipo'";
     $conn->query($update);
     }
     
     header("location:https://lomuchachogames.com/help/report?min=1&id=$idpost&tipo=$tipo");
 }else if($report == "error"){
    $timesReported = "SELECT * FROM report WHERE idpost = '$idpost' AND report.desc LIKE '%$desc%' AND tipo = '$tipo'";
      $timesReportedConn = $conn->query($timesReported);
      $timesReportedN = mysqli_num_rows($timesReportedConn);
     if($timesReportedN == 0){
    $insert = "INSERT INTO `report` (`id`, `idpost`, `timeReported`, `tipo`, `desc`, `fecha`) VALUES (NULL, '$idpost', '1', '$tipo', '$desc', CURRENT_TIMESTAMP())";
     $conn->query($insert);
     }else if($timesReportedN > 0){
     $update = "UPDATE report SET timeReported = 'timeReported'+1 WHERE idpost = '$idpost' AND report.desc LIKE '%$desc%' AND tipo = '$tipo'";
     $conn->query($update);
     }
     
     header("location:https://lomuchachogames.com/help/report?min=1&id=$idpost&tipo=$tipo");
 }else{
     header("location:https://lomuchachogames.com/");
 }
}