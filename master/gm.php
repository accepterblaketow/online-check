<?php
    include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
    <title>線上訂房系統-管理員</title>
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
    </style>
    <script>
        $(function(){
            function ed(num){
                
            }

        });
    </script>

    </head>
<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><a onclick="location.href='../login.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
<<<<<<< HEAD:master/gm.php
                <li><a href="dm.php">訂單管理</a></li>
                <li><a href="rm.php">房型管理</a></li>
                <li><a href="gm.php">財報圖表</a></li>
=======
                <li><a href="intro1.php">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
>>>>>>> b34d7e84bbe80c3098cce8d992db2329e6ca82fc:user/intro1.php
            </ul>            
        </div>
        <?php
            $q="SELECT * FROM room";
            $ans=mysqli_query($db,$q);
            while($row=mysqli_fetch_assoc($ans)){
                    echo "<div>";
                    echo "<img src=".$row['img']." alt=尚未上傳圖片 width=300px height=240px>";
                    echo "<div><button onclick='func(1)'>修改</button></div>";
                    echo "</div>";
            }
        ?>
</body>
</html>