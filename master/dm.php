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
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <title>線上訂房系統-管理員</title>
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
        input.a{
                font-weight:bold;
                height:30px;
                font-size:13pt;
                width:300px;
                border-radius: 10px;
                background-color:#E0E0E0;
            }
        input.b{
                font-weight:bold;
                font-size:18px;
                height:40px;
                width:100px;
                background-color:#005AB5;
                border-radius: 10px;
                color: #E0E0E0;
        }
        a:link{
            text-decoration: none;            
        }
        a{
            color: #FFFFFF;
        }
        table{      
            border:3px #cccccc solid;            
        }
    </style>
    <script>
        function dele(id){
            $.post({
                url:"dele_d.php",
                data:{
                    resid:id,
                },
                success:function(){
                    alert('退房成功');
                    location.reload();
                }
            });
        }
    </script>
    </head>
<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="dm.php" style="color:#F6FF00">訂單管理</a></li>
                <li><a href="rm.php">房型管理</a></li>
                <li><a href="gm.php">財報圖表</a></li>
            </ul>            
        </div>
        <div>
            <from action="" method="POST">
                <input class="a" name="search_id" type="text" placeholder="以編號搜尋">
                <input class="btn btn-info" name="sear" type=submit value="搜尋">
            </from>
        </div>
        <br>
        <table class="table">
        <tr>
            <td>編號</td>
            <td>姓名</td>
            <td>入住日期</td>
            <td>退房日期</td>
            <td>房數</td>
            <td>天數</td>
            <td>總計</td>
            <td>付款方式</td>
            <td>連絡電話</td>            
            <td>意見/需求</td>
            <td>退房</td>
        </tr>
        <?php
            if(isset($_POST['sear'])){
                $resid=$_POST['search_id'];
                $q="SELECT * FROM res WHERE `id`='$resid'";
                $ans=mysqli_query($db,$q);               
            }
            else{
                $q="SELECT * FROM res";
                $ans=mysqli_query($db,$q);
            }
           while($row=mysqli_fetch_assoc($ans)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['na']."</td>";
            echo "<td>".$row['d1']."</td>";
            echo "<td>".$row['d2']."</td>";
            echo "<td>".$row['c']."</td>";
            echo "<td>".$row['da']."</td>";
            echo "<td>".$row['p']."</td>";
            echo "<td>".$row['pay']."</td>";
            echo "<td>".$row['ph']."</td>";
            echo "<td>".$row['op']."</td>";
            echo "<td><button class=btn btn-primary onclick='dele(".$row['id'].")'>退房</button></td>";
            echo "</tr>";
        }

        ?>
        </table>
    
</body>
</html>