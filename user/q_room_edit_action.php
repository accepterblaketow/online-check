<?php
    include "../conn.php";
    $resid=$_POST['resid'];
    $roomid=$_POST['roomid'];
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $op=$_POST['op'];
    $c=$_POST['c'];
    $da=$_POST['da'];
    $pay=$_POST['pay'];
    $q="SELECT * FROM `room` WHERE `id`='$roomid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $p=$row['p'];
    $p=$p*$c*$da;
    $q="UPDATE `res` SET `roomid`='$roomid',`d1`='$d1',`d2`='$d2',`op`='$op',`c`='$c',`da`='$da',`pay`='$pay',`p`='$p' WHERE `id`='$resid'";
    mysqli_query($db,$q);
?> 