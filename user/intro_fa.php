<?php
    include '../conn.php';
    $row=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../lo.ico">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
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
        div.c{
            margin:25px 0px;
            padding:20px 0px;
            background-color: #66B3FF;
            color:#000093;
        }
    </style>
    </head>

<body bgcolor="#80FFFF">  
<div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <img src='../aaa.ico' width="70px" height="70px">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px;left:2%;">
                <li><a href="intro_room.php" >房型介紹</a></li>
                <li><a href="intro_fa.php" style="color:#F6FF00">設施介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
    <div class="c" style="text-align:center; font-size: 25px;">
        <span>設施介紹</span>
    </div>
<br>
<div style="position: absolute;top:25%;left:22%;">
    <img src="../img/restarant.jpg" width="500px" height="300px">
</div>
<div style="position: absolute;top:25%;right:18%;">
    <span><h2>全天式餐廳</h2></span>
    <span>全天式餐廳為您提供西式、日式、沖繩料理等多元料理。開放式的廚房，</span><br>
    <span>感受現場忙碌而熱絡的氣氛，品嘗主廚嚴選烹調的多元精美料理。</span>
</div>
<div style="position: absolute;top:60%;right:22%;">
    <img src="../img/gym.jpg" width="500px" height="300px">
</div>
<div style="position: absolute;top:60%;left:22%;">
    <span><h2>健身房</h2></span>
    <span>對於熱愛健⾝的⼈來說，旅遊、出差、鍛鍊也不能停！跑步機、飛輪、</span><br>
    <span>重量訓練等１３種健⾝器材，讓您舒緩⾝⼼，調節旅途的疲累。</span>
</div>
<div style="position: absolute;top:95%;left:22%;">
    <img src="../img/swim.jpg" width="500px" height="300px">
</div>
<div style="position: absolute;top:95%;right:16%;">
    <span><h2>戶外游泳池</h2></span>
    <span>在繁榮的國際通中，能享受寬敞的空間，絕對是⼀種奢侈！提供25 公尺的</span><br>
    <span>⼾外泳池、兒童池、按摩池及泳池飲料吧。讓⼈能放鬆享受夏⽇的度假氣氛！</span>
</div>


</body>
</html>