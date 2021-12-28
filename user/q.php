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
        button.a{
            height:40px;
            width:90px;
            background-color:#005AB5;
            font-weight:bold;  
            border-radius: 10px;
            color: #E0E0E0;
            font-size:18px;
        }
        a:link{
            text-decoration: none;            
        }
        a{
            color: white;
        }
    </style>
    </head>
    <script>
        function edit(id){
            $.post({
                    url:"set.php",
                    data:{
                        rsid:id,                
                    },
                    dataType:"json",
                    success:function(msg){
                        $("#id").text("訂單編號: " + id);
                        $("#na").text("訂購人姓名: " + msg.na);
                        $("#ph").text("訂購人電話: " + msg.ph);
                        $("#p").text("總計: NT$" + msg.p);
                        $("#pay").text("付款方式: " + msg.pay);
                        $("#rname").text("房型: " + msg.rname);
                        $("#op").text("意見/需求: "+msg.op);
                        $("#im").html("<img src="+ msg.img + " width=300px height=240px>");
                        $("#dd").text("入住期間: " + msg.d1+"~"+msg.d2);     
                        $("#ed").html("<button class=a>修改房型</button><button class=a>修改個資</button><button class=a>取消訂房</button>")                                                                                           
                    }
                })
        }
    </script>
<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><a onclick="location.href='../logout.php'">登出</a></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="intro.html">房型介紹</a></li>
                <li><a href="res.php">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <table>
        <tr>
            <td>姓名</td>
            <td>入住日期</td>
            <td>退房日期</td>
            <td>房數</td>
            <td>天數</td>
            <td>總計</td>
            <td>付款方式</td>
            <td>連絡電話</td>            
            <td>意見/需求</td>
            <td>檢視/取消</td>

        </tr>
        <?php
            $uid=$_SESSION['user']['id'];
            $q="SELECT * FROM res WHERE `uid`='$uid'";
            $ans=mysqli_query($db,$q);
            while($row=mysqli_fetch_assoc($ans)){
                echo "<tr>";                
                echo "<td>".$row['na']."</td>";
                echo "<td>".$row['d1']."</td>";
                echo "<td>".$row['d2']."</td>";
                echo "<td>".$row['c']."</td>";
                echo "<td>".$row['da']."</td>";
                echo "<td>".$row['p']."</td>";
                echo "<td>".$row['pay']."</td>";
                echo "<td>".$row['ph']."</td>";
                echo "<td>".$row['op']."</td>";
                echo "<td><button class=a onclick='edit(".$row['id'].")'>檢視</button></td>";
                echo "</tr>";
            }
        ?>
        </table>
        <div style="float:right">
            <span id="id"></span><br>
            <span id="na"></span><br>
            <span id="ph"></span><br>
            <span id="p"></span><br>
            <span id="pay"></span><br>
            <span id="rname"></span><br>
            <span id="im"></span><br>
            <span id="dd"></span><br>
            <span id="op"></span><br>
            <span id='ed'></span>
        </div>
</body>
</html>