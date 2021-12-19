<?php
    include '../conn.php';
    if(isset($_POST['n1'])){
        $eva=$_POST['eva'];
        $q="INSERT INTO eva(`ev`) VALUES ('$eva')";
        mysqli_query($db,$q);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
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
        div.c{
            margin:25px 0px;
            padding:20px 0px;
            background-color: #66B3FF;
            color:#000093;
        }
        input.b{
                height:50px;
                width:270px;
                background-color:#005AB5;
                font-weight:bold;  
                border-radius: 10px;
                color: #E0E0E0;
                font-size:18px; 
        }  
    </style>
</head>
<body bgcolor="#80FFFF">         
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><a onclick="location.href='../login.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="intro1.php">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <div class="c" style="text-align:center; font-size: 25px;">
            <span>Customer Review</span><br><br>
            <span>客戶評價</span>
        </div>
        <br><br>
        <div style="text-align:center;">
            <form action="" method="post">
                <textarea id="inp" type="text" name="eva" style="height:400px;width:600px;border-color:#F0F0F0;font-weight:bold;font-size:24px;"></textarea><br>
                <span style="color: #8E8E8E;">
                    <?php
                        if(isset($_POST['n1'])) 
                            echo "已送出";
                    ?>
                </span>
                <br><br>
                <input class="b" type="submit" name="n1" value="送出">
                
            </form>
        </div>

</body>
</html>