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
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery-ui-1.13.0/jquery-ui.js"></script>
    <link href="../jquery-ui-1.13.0/jquery-ui.css" rel="stylesheet">
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
            background-color: #C4E1FF;
            color:#000093;
        }
    </style>
    <script>
    </script>
    </head>

<body bgcolor="#80FFFF"> 
        <div style="text-align:center;">
            <?php
                echo "<h1>預約成功</h1>";
                echo "<span>入住日期</span><br>";
                echo "<span>".$_SESSION['d1']."</span><br>";
                echo "<span>退房日期</span><br>";
                echo "<span>".$_SESSION['d2']."</span><br>";
                echo "<span>房型</span><br>";
                echo "<span>".$_SESSION['rm']."</span><br>";
                echo "<span>總計</span><br>";
                echo "<span>".$_SESSION['pp']."</span><br>";
                echo "<span>訂購人姓名</span><br>";
                echo "<span>".$_SESSION['na']."</span><br>";
                echo "<span>訂購人電話</span><br>";
                echo "<span>".$_SESSION['ph']."</span><br>";
                echo "<span>房型</span><br>";
                echo "<span>".$_SESSION['rm']."</span><br>";
                echo "<span>總計</span><br>";
                echo "<span>".$_SESSION['pp']."</span><br>";
                echo "<span>付款方式</span><br>";
                echo "<span>".$_SESSION['pay']."</span><br>";
            ?>
        </div>
        <br><br>
        <div style="text-align:center;">
                <button   class="a" style="top:600px;left:480px;" onclick="location.href='q.php'">確認</button>
        </div>  
</body>
</html>