<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
if(!empty($_GET['act'])){
            $delete = "DELETE FROM `askGame` WHERE `askGame`.`id` = $_GET[act]";
            $conn->query($delete);
            header("location:https://admin.lomuchachogames.com/android/?success=2");
}else{
 $tipo = $_POST['report'];
 $desc = $_POST['desc'];
  
 $search = "SELECT * FROM askGame WHERE askGame.desc = '$desc'";
 $searchC = $conn->query($search);
 $s = mysqli_num_rows($searchC);
 
 
   if($s >= 1){
       $update = "UPDATE askGame SET quantity = quantity + 1 WHERE askGame.desc = '$desc'";
       $conn->query($update);
       
       header("location:https://lomuchachogames.com/help/ask-for-game?min=1");
   }else if(empty($desc)){
       header("location:https://lomuchachogames.com");
   }else{
     $insert = "INSERT INTO `askGame` (`id`, `tipo`, `desc`, `quantity`, `date`) VALUES (NULL, '$tipo', '$desc', '1', CURRENT_TIMESTAMP())";
     $conn->query($insert);
     
     header("location:https://lomuchachogames.com/help/ask-for-game?min=1&$s");
   }
}