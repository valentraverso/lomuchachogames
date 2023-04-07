<?php
session_start();
if(empty($_GET['id'])){
    header("location:https://admin.lomuchachogames.com/pc");
}else{
if(empty($_SESSION['user'])){
    include_once $_SERVER['DOCUMENT_ROOT'].'/templates/login.php';
}else{
    include_once $_SERVER['DOCUMENT_ROOT'].'/templates/pc/edit.php';
}
}