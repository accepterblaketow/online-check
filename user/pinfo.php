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
            background-color: #C4E1FF;
            color:#000093;
        }
    </style>
    </head>

<body bgcolor="#80FFFF">  
    <div id="t" style="background-color: #2828FF;display: block;height:70px;">
        <span style="float:right;"><a onclick="location.href='../logout.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="intro1.php">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php" style="color:#F6FF00">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>
    </div>
    <div class="c" style="text-align:center; font-size: 25px;">
        <span>個人資料維護</span>
    </div>
<br>
<span style="position:absolute;left:10px;">名稱</span>
<span style="position:absolute;left:930px;"><?php echo $row['name'];?></span>
<br><br><br>    
<span style="position:absolute;left:10px;">電子郵件</span>
<span style="position:absolute;left:930px;"><?php echo $row['email'];?></span>
<br><br><br>
<span style="position:absolute;left:10px;">性別</span>
<span style="position:absolute;left:930px;"><?php echo $row['sex'];?></span>
<br><br><br>
<span style="position:absolute;left:10px;">電話</span>
<span style="position:absolute;left:930px;"><?php echo $row['ph'];?></span>
<br><br><br>
<span style="position:absolute;left:10px;">身分證字號</span>
<span style="position:absolute;left:930px;"><?php echo $row['iid'];?></span>
<br><br><br>
<span style="position:absolute;left:10px;">聯絡地址</span>
<span style="position:absolute;left:930px;"><?php echo $row['lo'];?></span>
</div>
<br><br><br>
<div style="text-align:center;">
    <button class="btn btn-primary" style="font-weight:bold;" onclick="location.href='pinfo_edit.php'">修改個人資料</button>
</div>

</body>
</html>