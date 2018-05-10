<?php
session_start();
    if(!$_SESSION['id'] && end(explode('/', $_SERVER['URL'])) != 'index.php') header('location: ../giris.php');
?>