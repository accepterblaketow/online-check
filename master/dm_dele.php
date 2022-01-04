<?php
    include "../conn.php";
    $resid=$_POST['resid'];
    $q="SELECT * FROM res WHERE `id`='$resid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $roomid=$row['roomid'];
    $uid=$row['uid'];
    $p=$row['p'];
    $d1=$row['d1'];
    $d2=$row['d2'];
    $c=$row['c'];
    $q="INSERT INTO `log`(`roomid`,`uid`,`p`,`d1`,`d2`) VALUES ('$roomid','$uid','$p','$d1','$d2')";
    mysqli_query($db,$q);
    $q="DELETE FROM `res` WHERE `id`='$resid'";
    mysqli_query($db,$q);
    $q="UPDATE `room` SET `c`=`c`+'$c' WHERE `id`='$roomid'";
    mysqli_query($db,$q);

?>