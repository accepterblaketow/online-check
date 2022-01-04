<?php
    include '../conn.php';
    $uid=$_SESSION['user']['id'];
    $eva=$_POST['eva'];
    $score=$_POST['score'];
    $q="INSERT INTO eva(`uid`,`ev`,`score`) VALUES ('$uid','$eva','$score')";
    mysqli_query($db,$q);

?>