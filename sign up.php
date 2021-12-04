<?php
    include 'conn.php';
    if(isset($_POST['up'])){
        $mail=$_POST['mail'];
        $pwd=$_POST['pwd'];
        $q="insert into guest(`email`,`pwd`) values ('$mail','$pwd')";
        mysqli_query($db,$q);  
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
                font-weight:bold;
                font-size:18px;
               
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
                float:right;
                margin:80px;
            }
        </style> 
    </head>
    
    <body>    
        <div class="a">
            <h3>DING 線上訂房系統</h3>
            <h3 style=>會 員 註 冊</h3>
            <form action="" method="POST">
                <span>電 子 郵 件</span><br>
                <input type="text" name="mail" class="a"><br><br>
                <span>密 碼</span><br>
                <input type="text" name="pwd" class="a"><br><br>
                <span>確 認 密 碼</span><br>
                <input type="text" name="repwd" class="a"><br><br>
                <br><br>
                <div style="text-align: center;">
                    <a onclick="location.href='login.php'" class="a"><u>會員登入</u></a><br>
                <input class="b" type="submit" name="up" value="SIGN UP">
                </div>
            </form>
        </div>
    </body>
    
</html>
