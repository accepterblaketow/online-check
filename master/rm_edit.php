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
            position:absolute;
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
        function ed(id){
                $.post({
                    url:"up.php?s=3",
                    data:{
                        roid:id,
                        rm:$("#rm").val(),
                        des:$("#des").val(),
                        c:$("#c").val(),
                        mon:$("#mon").val(),
                        img:$("#pp").attr("src"),
                    },
                    success:function(msg){
                        alert("修改成功");
                        location.href="rm.php";
                    },
                });
            }
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
        <?php
            $rid=$_SESSION['roomid'];
            $q="SELECT * FROM room WHERE `id`='$rid'";
            $row=mysqli_fetch_array(mysqli_query($db,$q));
            echo "<div style=position:absolute;left:20%;top:20%;>";
            echo "<span>圖片</span><br>";
            echo "<form action=up.php method=POST enctype=multipart/form-data>";
            echo "<img src=".$_SESSION["pic"]." alt=預覽圖片 width=240px height=200px id=pp><br><br>";
            echo "<input class='btn btn-secondary' type=file name=file id=file>";
            echo "<input class='btn btn-primary' style='height:45px;'type=submit name=pic value=上傳圖片>";
            echo "</form><br>";
            echo "<span>房型名稱</span><br>";
            echo "<input class=b type=text id=rm style=width:400px; value=".$row['rname']."><br><br>";
            echo "<span>房數</span><br>";
            echo "<input class=b type=text id=c style=width:55px value=".$row['c']."><br><br>";
            echo "<span>價格</span><br>";
            echo "<input class=b type=text id=mon style=width:100px value=".$row['p']."><br><br>";
            echo "</div>";
            echo "<div style=position:absolute;right:25%;top:20%;>";
            echo "<span>描述</span><br>";
            echo "<textarea type=text id=des style=width:500px;height:540px;>".$row['des']."</textarea><br><br>";
            echo "</div>";
            echo "<div style=text-align:center;position:absolute;left:45%;top:85%;>";
            echo "<button  onclick=ed(".$rid.") class='btn btn-primary' style=top:600px;left:480px;>修改房型</button>";
            echo "</div>";
        ?>
        

</body>
</html>