<?php
    include "../conn.php";
    if(isset($_POST['resid'])){
        $resid=$_POST['resid'];
        $q="SELECT * FROM `res` WHERE `id`='$resid'";
        $row=mysqli_fetch_array(mysqli_query($db,$q));
        $_SESSION['res']=$row;
        $roomid=$_SESSION['res']['roomid'];
        $q="SELECT * FROM `room` WHERE `id`='$roomid'";
        $row=mysqli_fetch_array(mysqli_query($db,$q));
        $_SESSION['p']=$row['p'];
    }
    $resid=$_SESSION['res']['id'];
    $q="SELECT * FROM `res` WHERE `id`='$resid'";
    $row=mysqli_fetch_array(mysqli_query($db,$q));
    $_SESSION['res']=$row;
    $roomid=$_SESSION['res']['roomid'];
    $q="SELECT * FROM `room` WHERE `id`='$roomid'";
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
        $(function(){
            var to=new Date();
            var str=to.getFullYear()+"-"+(to.getMonth()+1)+"-"+to.getDate();
            $("#d1").attr("min",str);
            $("#d2").attr("min",str);
        });
        function se(){
            if($("#ss").val() !="請選擇房型"){
                $.post({
                    url:"rf.php",
                    data:{
                        rid:$("#ss").val(),                
                    },
                    dataType:"json",
                    success:function(msg){
                        $("#ron").text(msg.rname);
                        $("#de").text(msg.des);
                        $("#im").html("<img src="+ msg.img + " width=300px height=240px>");
                        $("#pp").text("價格");
                        $("#p").text(msg.p);
                        $("#c").text("剩餘房數"+msg.c);
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
        function q_room_edit(id){
            var da1=new Date($("#d1").val());
            var da2=new Date($("#d2").val());
            var di = parseInt((da2-da1)/1000/60/60/24);
            $.post({
                url:"q_room_edit_action.php",
                data:{
                    resid:id,
                    roomid:$("#ss").val(),
                    d1:$("#d1").val(),
                    d2:$("#d2").val(),                   
                    op:$("#op").val(),
                    c:$("#cc").val(),
                    da:di,
                    pay:$("#pay").val(),          
                },
                success:function(msg){
                    location.href="q.php";
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
        <div class="c" style="text-align:center; font-size: 25px;">
            <span>修改房型</span>
        </div>
        <div>
            <br>     
            <sapn>房型選擇</span><br>
            <select id="ss" onchange="se()" onclick="sev()">
                <option value="請選擇房型">請選擇房型</option>
                <?php
                    $q="SELECT * FROM room WHERE `c` > 0";
                    $ans=mysqli_query($db,$q);
                    while($row=mysqli_fetch_assoc($ans)){
                        if($row['id']==$_SESSION['res']['roomid'])
                            echo "<option value=".$row['id']." selected>".$row['rname']." 剩餘房數 :".$row['c']." NT$ ".$row['p']."</option>";
                        else
                            echo "<option value=".$row['id'].">".$row['rname']." 剩餘房數 :".$row['c']." NT$ ".$row['p']."</option>";
                    }
                ?>
            </select><br><br>                
            <sapn>入住日期</span>
            <input id="d1" type="date" id="d1" class="a" onchange="de()" value=<?php echo $_SESSION['res']['d1'];?>><br><br>
            <sapn>退房日期</span>
            <input type="date" id="d2" class="a" onchange="de1()" value=<?php echo $_SESSION['res']['d2'];?>><br><br>
            <sapn>房間數量</span>
            <input type="number" class="a" min="0" id="cc" value=<?php echo $_SESSION['res']['c'];?>><br><br>      
        </div>
        
        <div style="float:right">
            <span id="ron"></span><br>
            <span id="im"></span><br>
            <span id="de"></span><br>            
            <span id="pp"></span><span id="p"></span><br>
            <span id="c"></span><br>
        </div>
        <span>意見/需求</span><br>
        <textarea type="text" id="op" style="width:300px;height:100px;"><?php echo $_SESSION['res']['op'];?></textarea><br>
        <span>付款方式</span><br>
        <select id="pay">
            <option value="線上刷卡" <?php if ($_SESSION['res']['pay']=="線上刷卡") echo "selected";?>>線上刷卡</option>
            <option value="付現" <?php if ($_SESSION['res']['pay']=="付現") echo "selected";?>>付現</option>
        </select><br>
        <div style="text-align:center;">
                <button  id="add" class="btn btn-primary btn-lg" style="top:600px;left:480px;" onclick="q_room_edit(<?php echo $_SESSION['res']['id'];?>)">確認修改</button>
        </div>
</body>
</html>