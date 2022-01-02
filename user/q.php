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
        function edit_room(id){
            $.ajax({
                type:"post",
                url:"q_room_edit.php",
                data:{
                    resid:id,
                },
                success:function(){
                    location.href="q_room_edit.php";
                }
            })
        }
        function edit_userinfo(id){

        }
        function dele_res(id){

        }
        function edit(id){
            $.post({
                    url:"set.php",
                    data:{
                        rsid:id,                
                    },
                    dataType:"json",
                    success:function(msg){
                        $("#id0").text("訂單編號");
                        $("#na0").text("訂購人姓名");
                        $("#ph0").text("訂購人電話");
                        $("#p0").text("總計");
                        $("#pay0").text("付款方式");
                        $("#rname0").text("房型");
                        $("#op0").text("意見/需求");
                        $("#dd0").text("入住期間");     
                        $("#im0").html("參考圖片");
                        $("#ed0").html("編輯")
                        $("#id").text(id);
                        $("#na").text(msg.na);
                        $("#ph").text(msg.ph);
                        $("#p").text(msg.p);
                        $("#pay").text(msg.pay);
                        $("#rname").text(msg.rname);
                        $("#op").text(msg.op);
                        $("#im").html("<img src="+ msg.img + " width=300px height=240px>");
                        $("#dd").text(msg.d1+"~"+msg.d2);     
                        $("#ed").html("<div class='btn-group'><button class='btn btn-primary' onclick=edit_room(" + id + ")>修改房型</button><button class='btn btn-primary' onclick=edit_userinfo(" + id + ")>修改個資</button><button class='btn btn-primary' onclick=dele_res(" + id + ")>取消訂房</button></div>")                                                                                           
                    }
                })
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
        <table class="table table-hover">
        <tr>
            <td>姓名</td>
            <td>入住日期</td>
            <td>退房日期</td>
            <td>總計</td>
            <td>付款方式</td>
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
                echo "<td>".$row['p']."</td>";
                echo "<td>".$row['pay']."</td>";
                echo "<td><button type=button class='btn btn-primary' onclick='edit(".$row['id'].")'>檢視</button></td>";
                echo "</tr>";
            }
        ?>
        </table>
        <div>
        <table class="table table-borderless">
        <tr>
                <td id="id0"></td>
                <td id="ph0"></td>
                <td id="p0"></td>
                <td id="pay0"></td>
                <td id="rname0"></td>
                <td id="im0"></td>
                <td id="dd0"></td>
                <td id="op0"></td>
                <td id="ed0"></td>
            </tr>
            <tr>
                <td id="id"></td>
                <td id="ph"></td>
                <td id="p"></td>
                <td id="pay"></td>
                <td id="rname"></td>
                <td id="im"></td>
                <td id="dd"></td>
                <td id="op"></td>
                <td id="ed"></td>
            </tr>
        </table>
        </div>
</body>
</html>