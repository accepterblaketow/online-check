<?php
    include "../conn.php";
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
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
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
            height:35px;
            font-size:13pt; 
            outline-color:#66B3FF;
            border-radius:10px;
            border-width:1px;
            font-weight:bold;
        }  
        button.a{
            
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
    <script>
        $(function(){
            $( "#add" ).click(function(){
                $.post({
                    url:"up.php?s=1",
                    data:{
                        rm:$("#rm").val(),
                        des:$("#des").val(),
                        c:$("#c").val(),
                        mon:$("#mon").val(),
                        img:$("#pp").attr("src"),
                    },
                    success:function(msg){
                        alert("新增成功");
                        location.href="rm.php";
                    },
                });
            });
        });   
    </script>
    </head>

<body bgcolor="#80FFFF"> 
      
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <img src='../aaa.ico' width="70px" height="70px">
            <ul id="t" style="font-size: 0;position: absolute;top:25px;left:2%;">
                <li><a href="dm.php">訂單管理</a></li>
                <li><a href="rm.php" style="color:#F6FF00">房型管理</a></li>
                <li><a href="gm.php">財報圖表</a></li>
            </ul>            
        </div>
        <br>
        <div style=position:absolute;left:20%;top:20%;>
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <img src=
                    <?php
                        if(isset($_SESSION["pic"])){
                            echo $_SESSION["pic"];
                        }
                    ?>
                 alt="預覽圖片" width="240px" height="200px" id="pp"><br><br>
                <input class="b" type="file" name="file" id="file">
                <input class="b" type="submit" name="pic" value="上傳圖片">
            </form>
            <br>
            <span style="">房型名稱</span><br>
            <input class="b" type="text" id="rm" style="width:400px;" value=""><br><br>
            
            <span>房數</span><br>
            <input class="b" type="text" id="c" style="width:55px"><br><br>
            <span>價格</span><br>
            <input class="b" type="text" id="mon" style="width:100px"><br><br>
        </div>
        <div style=position:absolute;right:25%;top:20%;>
            <span>描述</span><br>
            <textarea type="text" id="des" style="width:500px;height:400px;"></textarea><br><br>
        </div>
        <div style="text-align:center;position:absolute;top:80%;left:45%;">
            <button  id="add" class="btn btn-primary btn-lg">新增房型</button>
        </div>
        

</body>
</html>