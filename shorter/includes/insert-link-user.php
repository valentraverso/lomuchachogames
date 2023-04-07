<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
    
    $name = $_POST['name'];
    $originalLink = $_POST['page'];
    

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 40; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    $shorterL = "http://shorter.lomuchachogames.com/links/shortUser?l=$randomString";
    
    $randomLink = $randomString;
    
    $insert = "INSERT INTO `userLinks` (`id`, `name`, `originalLink`, `shorterLink`, `randomLink`, `date`, `views`) VALUES (NULL, '$name', '$originalLink', '$shorterL', '$randomLink', CURRENT_TIMESTAMP(), '');";
    $conn->query($insert);
    
    header("location:http://corta.ml/includes/upload-link?urlShort=$shorterL");