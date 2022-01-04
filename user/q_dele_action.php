<?php
    include "../conn.php";
    $resid=$_POST['resid'];
    $q="SELECT * FROM `res` WHERE `id`='$resid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $roomid=$row['roomid'];
    $c=$row['c'];
    $q="DELETE FROM `res` WHERE `id`='$resid'";
    mysqli_query($db,$q);
    $q="UPDATE `room` SET `c`=`c`+'$c' WHERE `id`='$roomid'";
    mysqli_query($db,$q);
?> 