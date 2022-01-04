<?php
    include "../conn.php";
    $rd=$_POST['rid'];
    $q="SELECT * FROM room WHERE `id`='$rd'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $ans["rname"]=$row["rname"];
    $ans["des"]=$row["des"];
    $ans["img"]=$row["img"];
    $ans["p"]=$row["p"];
    $ans["c"]=$row["c"];
    echo json_encode($ans);
?> 