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
    </head>

<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><a onclick="location.href='../login.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="dm.php">訂單管理</a></li>
                <li><a href="addm.php">新增房型</a></li>
                <li><a href="rm.php">房型管理</a></li>
                <li><a href="gm.php">財報圖表</a></li>
            </ul>            
        </div>
        <div><img style="margin: 0 400px;position:absolute;top:150px;right:1000px;"src="./img/h1.jpg" width="350" height="250"></div>        
        <div><img style="margin: 0 400px;position:absolute;top:550px;right:1000px;"src="./img/h2.jpg" width="350" height="250"></div>

</body>
</html>