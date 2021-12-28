<?php
    include "../conn.php";
    $rsid=$_POST['rsid'];
    $q="SELECT * FROM res WHERE `id`='$rsid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $rid=$row['roomid'];
    $ans["na"]=$row["na"];
    $ans["ph"]=$row["ph"];
    $ans["p"]=$row["p"];
    $ans["pay"]=$row["pay"];
    $ans["op"]=$row["op"];
    $ans["d1"]=$row["d1"];
    $ans["d2"]=$row["d2"];
    $q="SELECT * FROM room WHERE `id`='$rid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $ans["img"]=$row["img"];
    $ans["rname"]=$row["rname"];
    echo json_encode($ans);

?>