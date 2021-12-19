<?php
        include "../conn.php";
        $c=$_GET["c"];
        if($_FILES["file"]["error"] > 0){
            header('Location:addm.php');
        }
        else{
            $t=date("YmdHis");
            move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/".$t.$_FILES["file"]["name"]);
            $_SESSION["pic"]="../upload/".$t.$_FILES["file"]["name"];
            header('Location:addm.php');
        }    
        if($c==1){
            $rm=$_POST['rm'];
            $des=$_POST['des'];
            $c=$_POST['c'];
            $p=$_POST['mon'];
            $img=$_SESSION['pic'];
            $q="INSERT INTO room(`rname`,`des`,`p`,`c`,`img`) VALUES('$rm','$des','$p','$c','$img')";
            mysqli_query($db,$q);
        } 
?> 