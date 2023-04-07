<?php
session_start();

if(empty($_SESSION['user'])){
    include_once 'templates/login.php';
}else{
    include_once 'templates/loged.php';
}