<?php
    include '../conn.php';
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $email=$_POST['email'];
    $iid=$_POST['iid'];
    $ph=$_POST['ph'];
    $lo=$_POST['lo'];
    $id=$_SESSION['user']['id'];
    $q="UPDATE `user` SET `name`='$name',`sex`='$sex',`email`='$email',`iid`='$iid',`ph`='$ph',`lo`='$lo' WHERE `id`='$id'";
    mysqli_query($db,$q);
    $q="SELECT * FROM `user` WHERE `id`='$id'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $_SESSION['user']=$row;
?>