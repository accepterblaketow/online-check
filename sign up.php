<?php
    include 'conn.php';
    if(isset($_POST['up'])){
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $pwd=$_POST['pwd'];
        $q="INSERT INTO user(`name`,`email`,`pwd`) VALUES ('$name','$mail','$pwd')";
        mysqli_query($db,$q);  
        header('Location:login.php?c=1');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.6.0.min.js"></script>
        <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
        <title>DING 線上訂房系統</title>
        <style>
            body{
                margin: 0; padding: 0;
                font-weight:bold;
                font-size:18px;
                display: inline;               
            }
            input.a{
                border-style:none;
                height:30px;
                font-size:10pt;
                width:300px;
                background-color:#E0E0E0;
            }
            input.b{
                height:50px;
                width:270px;
                background-color:#005AB5;
                border-radius: 10px;
                color: #E0E0E0;
            }
            a{
                border-style:none;
                font-size:13pt;
                color: #8E8E8E;
                background-color:transparent;
            }
            div.a{
                position: absolute;     
                border-radius: 20px;
                background-color:#FFFFFF;
                float:right;
                top:200px;
                right:560px; 
                padding:10px;
            }
        </style> 
    </head>    
    <body bgcolor="#9393FF">   
            <div style="background-color: #2828FF;display: block;height:70px;"></div>
            <img style="margin: 0 400px;"src="./img/log.png" width="650" height="500"> 
            <div class="a">        
            <img style="border-radius: 50%;" align="left" src="./img/logo.jpeg" width="30" height="30">    
            <h3 style="margin: 0 42px;">DING 線上訂房系統</h3>
            <h3>會 員 註 冊</h3>
            <form action="" method="POST">
                <span>姓名</span><br>
                <input type="text" name="name" class="a"><br><br>
                <span>電 子 郵 件</span><br>
                <input type="text" name="mail" class="a"><br><br>
                <span>密 碼</span><br>
                <input type="password" name="pwd" class="a"><br><br>
                <span>確 認 密 碼</span><br>
                <input type="password" name="repwd" class="a"><br><br>
                <br><br>
                <div style="text-align: center;">
                    <a onclick="location.href='login.php'" class="a"><u>會員登入</u></a><br>
                <input class="b" type="submit" name="up" value="SIGN UP">
                </div>
            </form>
        </div>
    </body>
    
</html>
