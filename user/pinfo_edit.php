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
        input.b{
            height:35px;
            font-size:13pt; 
            outline-color:#66B3FF;
            border-radius:10px;
            border-width:1px;
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
        function pinfo_edit(){
            if($("#na").val()=="" || $("#email").val()==""){
                alert("*項不可為空");
            }
            else{
                $.ajax({
                    type:'post',
                    url:'pinfo_edit_action.php',
                    data:{
                        name:$("#na").val(),
                        sex:$("#sex").val(),
                        email:$("#email").val(),
                        iid:$("#iid").val(),
                        ph:$("#ph").val(),
                        lo:$("#lo").val(),
                    },
                    success:function(msg){
                        alert("修改成功");
                        location.href="pinfo.php";
                    }
                });
            }
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
                <li><a href="pinfo.php" style="color:#F6FF00">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
    <div class="c" style="text-align:center; font-size: 25px;">
        <span>個人資料維護</span>
    </div>
<br>
<?php
            echo "<div style=text-align:left;margin-left:700px>";
            echo "<form action='' method=POST>";
            echo "<span>名稱*</span><br>";
            echo "<input class=b type=text id=na style=width:100px; value=".$row['name']."><br><br>";
            echo "<span>性別</span><br>";
            echo "<select id=sex>";
            echo "<option value=男>男</option>";
            echo "<option value=女>女</option>";
            echo "</select><br><br>";
            echo "<span>電子郵件*</span><br>";
            echo "<input class=b type=text id=email style=width:300px; value=".$row['email']."><br><br>";
            echo "<span>身分證字號</span><br>";
            echo "<input class=b type=text id=iid style=width:200px value=".$row['iid']."><br><br>";
            echo "<span>電話</span><br>";
            echo "<input class=b type=text id=ph style=width:180px value=".$row['ph']."><br><br>";
            echo "<span>聯絡地址</span><br>";
            echo "<input class=b type=text id=lo style=width:400px value=".$row['lo']."><br><br>";
            echo "<button class='btn btn-info' onclick=pinfo_edit() name=pinfo>確認送出</button>";
            echo "</form><br>";
            echo "</div>";
?>

</body>
</html>