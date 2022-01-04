<?php
    include "../conn.php";
    if(isset($_POST['na'])){
        $roomid=$_SESSION['rid'];
        $p=$_SESSION['pp'];
        $pay=$_SESSION['pay'];
        $d1=$_SESSION['d1'];
        $d2=$_SESSION['d2'];       
        $op=$_SESSION['op'];
        $c=$_SESSION['cc'];
        $uid=$_SESSION['user']['id'];
        $na=$_POST['na'];
        $ph=$_POST['ph'];
        $lo=$_POST['lo'];
        $sex=$_POST['sex'];
        $iid=$_POST['iid'];
        $da=$_SESSION['cc1'];        
        $em=$_POST['em'];  
        $_SESSION['na']=$na;
        $_SESSION['ph']=$ph;
        $_SESSION['lo']=$lo;
        $_SESSION['sex']=$sex;
        $_SESSION['iid']=$iid;     
        $q="INSERT INTO res(`roomid`,`d1`,`d2`,`na`,`ph`,`lo`,`sex`,`iid`,`p`,`pay`,`da`,`uid`,`op`,`c`,`em`) VALUES ('$roomid','$d1','$d2','$na','$ph','$lo','$sex','$iid','$p','$pay','$da','$uid','$op','$c','$em')";
        $row=mysqli_fetch_array(mysqli_query($db,$q));
        $_SESSION['res']=$row;
        echo $_SESSION['res']['roomid'];
        $q="UPDATE `room` SET `c`=`c`-'$c' WHERE `id`='$roomid'";
        mysqli_query($db,$q);
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../lo.ico">
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery-ui-1.13.0/jquery-ui.js"></script>
    <link href="../jquery-ui-1.13.0/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <title>線上訂房系統</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-weight:bold;
            font-size:18px;
        }
        #t ul li{
            padding:5px;
            margin:10px;
            display: inline-block;
            font-weight:bold;   
            list-style: none;
            font-size: 18px;
        }
        a:link{
            text-decoration: none;            
        }
        a{
            color: white;
        }
        input.a{
                border-color:#D0D0D0;
                height:20px;
                font-size:10pt;
                width:200px;
                background-color:#E0E0E0;
        }
        button.a{
            height:50px;
            width:270px;
            background-color:#005AB5;
            font-weight:bold;  
            border-radius: 10px;
            color: #E0E0E0;
            font-size:18px;
        }
        div.c{
            margin:25px 0px;
            padding:20px 0px;
            background-color: #66B3FF;
            color:#000093;
        }
    </style>
    <script>
    </script>
    </head>

<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <img src='../aaa.ico' width="70px" height="70px">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px;left:2%;">
                <li><a href="intro_room.php">房型介紹</a></li>
                <li><a href="intro_fa.php">設施介紹</a></li>
                <li><a href="res.php"style="color:#F6FF00">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <br>
        <div class="c" style="text-align:center; font-size: 25px;">
        <span>預約成功</span>
        </div>
        <div style="position: absolute;left:45%;">
            <?php
                echo "<span>入住日期</span><br>";
                echo "<span>".$_SESSION['d1']."</span><br><br>";
                echo "<span>退房日期</span><br>";
                echo "<span>".$_SESSION['d2']."</span><br><br>";
                echo "<span>房型</span><br>";
                echo "<span>".$_SESSION['rm']."</span><br><br>";
                echo "<span>總計</span><br>";
                echo "<span>".$_SESSION['pp']."</span><br><br>";
                echo "<span>訂購人姓名</span><br>";
                echo "<span>".$_SESSION['na']."</span><br><br>";
                echo "<span>訂購人電話</span><br>";
                echo "<span>".$_SESSION['ph']."</span><br><br>";
                echo "<span>房數</span><br>";
                echo "<span>".$_SESSION['cc']."</span><br><br>";
                echo "<span>總計</span><br>";
                echo "<span>".$_SESSION['pp']."</span><br><br>";
                echo "<span>付款方式</span><br>";
                echo "<span>".$_SESSION['pay']."</span><br><br>";
            ?>
            <div style="text-align:center;">
                <button  class='btn btn-primary' onclick="location.href='q.php'">確認</button>
            </div> 
        </div>
        <br><br>
         
</body>
</html>