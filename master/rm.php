<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery-ui-1.13.0/jquery-ui.js"></script>
    <link href="../jquery-ui-1.13.0/jquery-ui.css" rel="stylesheet">
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
        input.b{        
            background-color:#F0F0F0;
            font-weight:bold;
            font-size:18px;
            border-width:2px;
            border-color:#D0D0D0;
        }  
        button.b{
            height:50px;
            width:270px;
            background-color:#005AB5;
            border-radius: 10px;
            color: #E0E0E0;
            font-weight:bold;
            font-size:18px;
        }  
        span{
            color:#2828FF;
        }
    </style>
    <script>
        $(function() {
    $( "#dia" ).dialog({
      autoOpen: false,
    });
    $( "#add" ).click(function() {
      $( "#dia" ).dialog( "open" );
    });
  });
        
    </script>
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
        <br>
        <div style="padding:25px;">
            <form action="" method="POST">
                <span style="">房型名稱</span><br>
                <input class="b" type="text" name="rm" style="width:400px;">

                <span style="position:absolute;left:650px;top:118px;">描述</span>
                <input class="b" type="text" name="des" style="position:absolute;left:650px;width:500px;height:285px;"><br><br>
                <span>房數</span><br>
                <input class="b" type="text" name="c" style="width:55px"><br><br>
                <span>價格</span><br>
                <input class="b" type="text" name="mon" style="width:100px"><br><br>
            </form>
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <input class="b" type="file" name="file" id="file">
                <img src=" 
                    <?php
                        if(isset($_SESSION["pic"])){
                            echo $_SESSION["pic"];
                        }
                    ?>
                " alt="預覽圖片"><br><br>
                <input class="b" type="submit" name="pic" value="上傳圖片">
            </form>
        </div>
        <br><br>
        <div style="text-align:center;">
            <button id="add" class="b">新增房型</button>
        </div>

</body>
</html>