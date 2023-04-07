<?php
if($_POST['verifier'] == "353535"){
    include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
    
    $name = $_POST['name'];
    $page = $_POST['page'];
    $originalLink = $_POST['oL'];
    

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 40; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    $shorterL = "http://shorter.lomuchachogames.com/links/short?l=$randomString";
    
    $randomLink = $randomString;
    
    $insert = "INSERT INTO `links` (`id`, `name`, `page`, `originalLink`, `shorterLink`, `randomLink`, `date`) VALUES (NULL, '$name', '$page', '$originalLink', '$shorterL', '$randomLink', CURRENT_TIMESTAMP());";
    $conn->query($insert);
    
    header("location:https://admin.lomuchachogames.com/shorter/add?link=$shorterL");
}else{
    header("location:http://shorter.lomuchachogames.com/hacker/toma-para-vos");
}