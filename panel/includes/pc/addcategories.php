<?php
 
$title = $_POST['newCat'];

include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-pc.php';

$insert = "INSERT INTO `categories` (`id`, `title`) VALUES (NULL, '$title')";
$conn->query($insert);

header("location:http://admin.lomuchachogames.com/pc/categories");