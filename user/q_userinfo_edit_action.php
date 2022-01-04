<?php
    include "../conn.php";
    $resid=$_SESSION['res']['id'];
    $na=$_POST['na'];
    $ph=$_POST['ph'];
    $lo=$_POST['lo'];
    $sex=$_POST['sex'];
    $iid=$_POST['iid'];
    $email=$_POST['em'];
    $q="UPDATE `res` SET `na`='$na',`ph`='$ph',`lo`='$lo',`sex`='$sex',`iid`='$iid',`em`='$email' WHERE `id`='$resid'";
    mysqli_query($db,$q);
?> 