<?php
    include 'conn.php';
    if(isset($_POST['in'])){
        $mail=$_POST['mail'];
        $pwd=$_POST['pwd'];
        $q="SELECT * FROM `guest` WHERE `email`='$mail' AND `pwd`='$pwd'";
        if($row=mysqli_fetch_array(mysqli_query($db,$q))){
            $_SESSION['user']=$row;
            header('Location:homepage.html');
        } 
        else{
            echo "帳號密碼錯誤";
        }
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
        <h3 style=>會 員 登 入</h3>
        <form action="" method="POST">
            <span>電 子 郵 件</span><br>
            <input type="text" name="mail" class="a"><br><br>
            <span>密 碼</span><br>
            <input type="text" name="pwd" class="a"><br><br>
            <br><br>
            <div style="text-align: center;">
            <a onclick="location.href='sign up.php'" class="a"><u>會員註冊</u></a><br>
            <input  class="b"  type="submit" name="in" value="SIGN IN">
            </div>
        </form>
        </div>
    </body>
    
</html>