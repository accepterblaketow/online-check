<?php
        include "../conn.php";
        $s=$_GET["s"];
        if($_FILES["file"]["error"] > 0){
            if($_SESSION['sta']=="add")
                header('Location:rm_add.php');
            else
                header('Location:rm_edit.php');
        }
        else{
            $t=date("YmdHis");
            move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/".$t);
            $_SESSION["pic"]="../upload/".$t;
            if($_SESSION['sta']=="add")
                header('Location:rm_add.php');
            else
                header('Location:rm_edit.php');
        }    
        if($s==1){
            $rm=$_POST['rm'];
            $des=$_POST['des'];
            $c=$_POST['c'];
            $p=$_POST['mon'];
            $img=$_POST["img"];
            $q="INSERT INTO room(`rname`,`des`,`p`,`c`,`img`) VALUES('$rm','$des','$p','$c','$img')";
            mysqli_query($db,$q);
        }
        if($s==2){            
            $rid=$_POST['rid'];
            $_SESSION['roomid']=$rid;
            $q="SELECT * FROM room WHERE `id`='$rid'";
            $row=mysqli_fetch_array(mysqli_query($db,$q));
            $_SESSION['pic']=$row['img'];
            $_SESSION['sta']="ed";
        }
        if($s==3){
            $rm=$_POST['rm'];
            $des=$_POST['des'];
            $c=$_POST['c'];
            $p=$_POST['mon'];
            $img=$_POST["img"];
            $rid=$_POST['roid'];
            $q="UPDATE room SET `rname`='$rm',`des`='$des',`p`='$p',`c`='$c',`img`='$img' WHERE `id`='$rid'";
            mysqli_query($db,$q);
        }
        if($s==4){
            $_SESSION['sta']="add";
        }
        
?> 