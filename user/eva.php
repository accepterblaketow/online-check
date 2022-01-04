
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
        input.b{
                height:50px;
                width:270px;
                outline-color:#66B3FF;
                font-weight:bold;  
                border-radius: 10px;
                font-size:15px; 
        }
        textarea{
            outline-color:#66B3FF;
            font-weight:bold;
        }
        select{
            font-weight:bold;
            
        }
        select option{
            font-weight:bold;
        }
    </style>
</head>
<script>

        function eva_add(){
            $.ajax({
                type:"post",
                url:"eva_add.php",
                data:{
                    eva:$("#eva").val(),
                    score:$("#score").val(),
                },
                success:function(msg){
                    alert("送出成功");
                }
            });
        }
    </script>
<body bgcolor="#80FFFF">         
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <img src='../aaa.ico' width="70px" height="70px">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px;left:2%;">
                <li><a href="intro_room.php">房型介紹</a></li>
                <li><a href="intro_fa.php">設施介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php" >會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php" style="color:#F6FF00">客戶評價</a></li>
            </ul>            
        </div>
        <div class="c" style="text-align:center; font-size: 25px;">
            <span>客戶評價</span>
        </div>

        <div style="text-align:center;">
            <span>評分</span>
            <select id="score">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <br><br>
        <div style="text-align:center;">
            <textarea type="text" id="eva" style="height:400px;width:600px;font-weight:bold;font-size:20px;"></textarea><br>
            <br><br>
            <button class="btn btn-info" style="width:200px;height:50px;" onclick="eva_add()" >送出</button>     
        </div>

</body>
</html>