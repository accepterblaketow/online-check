<?php
    include "../conn.php";
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
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../lo.ico">
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
        button.a{
            height:50px;
            width:270px;
            background-color:#005AB5;
            font-weight:bold;  
            border-radius: 10px;
            color: #E0E0E0;
            font-size:18px;
        }
        input.a{
            height:35px;
            font-size:13pt; 
            outline-color:#66B3FF;
            border-radius:10px;
            border-width:1px;
            font-weight:bold;
        }
        textarea{
            outline-color:#66B3FF;
            font-weight:bold;
        }
        div.c{
            margin:25px 0px;
            padding:20px 0px;
            background-color: #66B3FF;
            color:#000093;
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
            var to=new Date();
            var str=to.getFullYear()+"-"+(to.getMonth()+1)+"-"+to.getDate();
            $("#d1").attr("min",str);
            $("#d2").attr("min",str);
        });
        function se(){
            if($("#ss").val() !="請選擇房型"){
                $.post({
                    url:"room_find.php",
                    data:{
                        rid:$("#ss").val(),                
                    },
                    dataType:"json",
                    success:function(msg){
                        $("#ron").text(msg.rname);
                        $("#de").text(msg.des);
                        $("#im").html("<img src="+ msg.img + " width=300px height=240px>");
                        $("#pp").text("價格 NT$");
                        $("#p").text(msg.p);
                        $("#c").text("剩餘房數 "+msg.c);
                        $("#cc").attr("max",msg.c);
                    }
                }) 
            }                       
        }
        function de(){
            var mi=new Date($("#d1").val());
            mi=mi.setDate(mi.getDate()+1);
            mi=new Date(mi);
            $("#d2").attr("min",mi.toLocaleDateString("fr-CA"));
        }
        function de1(){
            var mi=new Date($("#d2").val());
            mi=mi.setDate(mi.getDate()-1);
            mi=new Date(mi);
            $("#d1").attr("max",mi.toLocaleDateString("fr-CA"));
        }
        function addq(){
            if($("#ss").val() !="請選擇房型" && $("#d1").val()!="" && $("#d2").val() !="" && $("#cc").val()!=""){
                var da1=new Date($("#d1").val());
                var da2=new Date($("#d2").val());
                var di = parseInt((da2-da1)/1000/60/60/24);
                $.post({
                    url:"res_filluserinfo.php",
                    data:{
                        rid:$("#ss").val(),
                        rm:$("#ron").text(),
                        p:$("#p").text(),
                        d1:$("#d1").val(),
                        d2:$("#d2").val(),                   
                        op:$("#op").val(),
                        cc:$("#cc").val(),
                        cc1:di,
                        pay:$("#pay").val(),
                        op:$("#op").val(),            
                    },
                    success:function(msg){
                        location.href="res_filluserinfo.php";
                    }
                })
            }            
        }
    </script>
    </head>

<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <img src='../aaa.ico' width="70px" height="70px">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px;left:2%;">
                <li><a href="intro_room.php" >房型介紹</a></li>
                <li><a href="intro_fa.php">設施介紹</a></li>
                <li><a href="res.php" style="color:#F6FF00">預約訂房</a></li>
                <li><a href="pinfo.php">會員資料</a></li>
                <li><a href="q.php">預約查詢</a></li>
                <li><a href="eva.php">客戶評價</a></li>
            </ul>            
        </div>
        <div class="c" style="text-align:center; font-size: 25px;">
            <span>預約訂房</span>
        </div>
        <div style="text-align:left;margin-left:400px;">
            <br>     
            <sapn>房型選擇</span><br>
            <select id="ss" onchange="se()" onclick="sev()">
                <option value="請選擇房型">請選擇房型</option>
                <?php
                    $q="SELECT * FROM room WHERE `c` > 0";
                    $ans=mysqli_query($db,$q);
                    while($row=mysqli_fetch_assoc($ans)){
                        echo "<option value=".$row['id'].">".$row['rname']." 剩餘房數 :".$row['c']." NT$ ".$row['p']."</option>";
                    }
                ?>
            </select><br><br>    

            <sapn>入住日期*</span><br>
            <input class="a" id="d1" type="date" id="d1"  onchange="de()" style="width:280px;"><br><br>
            <sapn>退房日期*</span><br>
            <input class="a" type="date" id="d2"  onchange="de1()" style="width:280px;"><br><br>
            <sapn>房間數量*</span><br>
            <input class="a" type="number" min="0" id="cc" style="width:50px;"><br><br>
            <span>意見/需求</span><br>
            <textarea type="text" id="op" style="width:300px;height:100px;"></textarea><br>
            <span>付款方式</span><br>
            <select id="pay">
                <option value="線上刷卡">線上刷卡</option>
                <option value="付現">付現</option>
            </select><br>
        </div>
        <div style="position: absolute;right:500px;top:240px;width:500px;height:500px;">
            <h4><span id="ron"></span><br></h4>
            <span id="im"></span><br>
            <span id="de"></span><br><br>
            <span id="c"></span> 
            <h2><span id="pp"></span><span id="p"></span></h2>
            
        </div>
        <br><br>
        <div style="text-align:center;">
                <button  id="add" class="btn btn-primary btn-lg" onclick="addq()">確認訂單</button>
        </div>

</body>
</html>