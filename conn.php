<?php
    session_start();
    $db=mysqli_connect('localhost','admin','1234','hotel');
    mysqli_query($db,"SET NAMES UTF8");
?>