<?php
    include "../conn.php";
    if(isset($_POST['rid'])){
        $_SESSION['rid']=$_POST['rid'];
        $_SESSION['rm']=$_POST['rm'];
        $_SESSION['d1']=$_POST['d1'];
        $_SESSION['d2']=$_POST['d2'];
        $_SESSION['cc']=$_POST['cc'];
        $_SESSION['cc1']=$_POST['cc1'];
        $_SESSION['op']=$_POST['op'];
        $_SESSION['p']=$_POST['p'];
        $_SESSION['pay']=$_POST['pay'];
        $_SESSION['op']=$_POST['op'];
        $pp=$_SESSION['p']*$_SESSION['cc']*$_SESSION['cc1'];
        $_SESSION['pp']=$pp;
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        input.a{
                border-color:#D0D0D0;
                height:20px;
                font-size:10pt;
                width:200px;
                background-color:#E0E0E0;
        }
        button.a{
            height:50px;
            width:270px;
            background-color:#005AB5;
            font-weight:bold;  
            border-radius: 10px;
            color: #E0E0E0;
            font-size:18px;
        }
        div.c{
            margin:25px 0px;
            padding:20px 0px;
            background-color: #C4E1FF;
            color:#000093;
        }
    </style>
    <script>
        function addq(){
            $.post({
                url:"addq.php",
                data:{
                    na:$("#na").val(),
                    ph:$("#ph").val(),
                    sex:$("#sex").val(),
                    em:$("#em").val(),
                    lo:$("#lo").val(),
                    iid:$("#iid").val(),
                },
                success:function(){
                    location.href="addq.php";
                }
            })
        }
    </script>
    </head>

<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><a onclick="location.href='../logout.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="intro1.php">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <br>
        <div class="c" style="text-align:center; font-size: 25px;">
        <span>填寫個人資料</span>
        </div>
        <div>
            <?php
                echo "<span>入住日期</span><br>";
                echo "<span>".$_SESSION['d1']."</span><br>";
                echo "<span>退房日期</span><br>";
                echo "<span>".$_SESSION['d2']."</span><br>";
                echo "<span>天數</span><br>";
                echo "<span>".$_SESSION['cc1']."</span><br>";
                echo "<span>房型</span><br>";
                echo "<span>".$_SESSION['rm']."</span><br>";
                echo "<span>意見/需求</span><br>";
                echo "<span>".$_SESSION['op']."</span><br>";
                echo "<span>總計</span><br>";
                echo "<span>".$_SESSION['pp']."</span><br>";
                echo "<span>付款方式</span><br>";
                echo "<span>".$_SESSION['pay']."</span><br>";
            ?>
        </div>
        <div>
            <br>
            <span>姓名</span><br>
            <input id="na" type="text" class="a"><br>
            <span>性別</span><br>
            <select id="sex">
            <option value="男">男</option>
            <option value="女">女</option>
            </select><br>
            <span>連絡電話</span><br>
            <input id="ph" type="text" class="a"><br>
            <span>電子郵件</span><br>
            <input id="em" type="text" class="a"><br>
            <span>聯絡地址</span><br>
            <input id="lo" type="text" class="a"><br>
            <sapn>身分證號</span><br>
            <input id="iid" type="text" class="a"><br>
        </div>
        <div style="text-align:center;">
            <button  id="add" class="a" style="top:600px;left:480px;" onclick="addq()">預約</button>
        </div>

</body>
</html>