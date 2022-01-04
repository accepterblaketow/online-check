<?php
    include 'conn.php';
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $pwd=$_POST['pwd'];
    $q="SELECT * FROM `user` WHERE `email`='$mail'";
    $count=mysqli_num_rows(mysqli_query($db,$q));
    if($count!=1){
        $q="INSERT INTO user(`name`,`email`,`pwd`) VALUES ('$name','$mail','$pwd')";
        mysqli_query($db,$q);
        echo "註冊成功";       
    }
    else{
        echo "此信箱已被註冊";
    }
    
    
?>