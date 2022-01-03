<?php
    include "../conn.php";
    if(isset($_POST['resid'])){
        $resid=$_POST['resid'];
        $q="SELECT * FROM `res` WHERE `id`='$resid'";
        $row=mysqli_fetch_array(mysqli_query($db,$q));
        $_SESSION['res']=$row;
    }
    $resid=$_SESSION['res']['id'];
    $q="SELECT * FROM `res` WHERE `id`='$resid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $_SESSION['res']=$row;
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
    </style>
    </head>
    <script>
        function q_userinfo_change(){
            $("#na").val("<?php echo $_SESSION['user']['name'];?>");
            $("#sex").val("<?php echo $_SESSION['user']['sex'];?>");
            $("#ph").val("<?php echo $_SESSION['user']['ph'];?>");
            $("#em").val("<?php echo $_SESSION['user']['email'];?>");
            $("#lo").val("<?php echo $_SESSION['user']['lo'];?>");
            $("#iid").val("<?php echo $_SESSION['user']['iid'];?>");
        }
    </script>
    <body> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="intro1.php">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php" style="color:#F6FF00">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <div class="c" style="text-align:center; font-size: 25px;">
            <span>修改個資</span>
        </div>
        <div style=text-align:left;margin-left:700px>
            <br>
            <span>姓名</span><br>
            <input id="na" type="text" value=<?php echo $_SESSION['res']['na']; ?>><br>
            <span>性別</span><br>
            <select id="sex">
            <option value="男" <?php if($_SESSION['res']['sex']=="男") echo "selected";?>>男</option>
            <option value="女" <?php if($_SESSION['res']['sex']=="女") echo "selected";?>>女</option>
            </select><br>
            <span>連絡電話</span><br>
            <input id="ph" type="text" style=width:180px; value=<?php echo $_SESSION['res']['ph']; ?>><br>
            <span>電子郵件</span><br>
            <input id="em" type="text" style="width:300px;" value=<?php echo $_SESSION['res']['em']; ?> ><br>
            <span>聯絡地址</span><br>
            <input id="lo" type="text" style=width:400px; value=<?php echo $_SESSION['res']['lo']; ?>><br>
            <sapn>身分證號</span><br>
            <input id="iid" type="text" style=width:200px; value=<?php echo $_SESSION['res']['iid']; ?>><br>
        </div>
        <br><br>
        <div style="text-align:center;">
                <button  class='btn btn-info' style="top:600px;left:480px;" onclick="q_userinfo_change()">同會員資料</button>
                <button  class='btn btn-info' style="top:600px;left:480px;" onclick="q_userinfo_edit(<?php echo $_SESSION['res']['id'];?>)">確認修改</button>
        </div>
    </body>
</html>