<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="jquery-ui.js"></script>
    <link href="jquery-ui.css" rel="stylesheet">
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
    </style>
    <script>
        $(function() {
            $( "#d1" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
            $( "#d2" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        
    </script>
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
        <div>
            <form>
                <br>
                <sapn>房型選擇</span>
                <input type="text" name="name" class="a"><br><br>
                <sapn>入住日期</span>
                <input id="d1" type="text" name="d1" class="a"><br><br>
                <sapn>退房日期</span>
                <input type="text" name="d2" class="a"><br><br>
            </form>
        
        </div>

</body>
</html>