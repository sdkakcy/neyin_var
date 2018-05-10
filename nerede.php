<?php
session_start();
    if(isset($_SESSION['id']) && end(explode('/', $_SERVER['URL'])) != 'index.php') header('location: admin/index.php');

?>