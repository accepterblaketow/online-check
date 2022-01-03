<?php
    include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery-ui-1.13.0/jquery-ui.js"></script>
    <link href="../jquery-ui-1.13.0/jquery-ui.css" rel="stylesheet">
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
        a:link{
            text-decoration: none;            
        }
        a{
            color: #FFFFFF;
        }
        input.b{        
            background-color:#F0F0F0;
            font-weight:bold;
            font-size:18px;
            border-width:2px;
            border-color:#D0D0D0;
        }  
        button.a{
            background-color:#005AB5;
            border-radius: 10px;
            color: #E0E0E0;
            font-weight:bold;
            font-size:18px;
        }  
        button.b{
            height:50px;
            width:270px;
            background-color:#005AB5;
            border-radius: 10px;
            color: #E0E0E0;
            font-weight:bold;
            font-size:18px;
        }  
        span{
            color:#2828FF;
        }
        table{      
            border:3px #cccccc solid;
            
            margin-left:auto; 
            margin-right:auto;
        }
    </style>
    <script>   
        function edit(id){
            $.post({
                url:"up.php?s=2",
                data:{
                    rid:id,
                },
            });
            location.href="edit.php";
        }
        function add(){
            $.post({
                url:"up.php?s=4",
            });
            location.href="addm.php";
        }

    </script>
    </head>

<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="dm.php">訂單管理</a></li>
                <li><a href="rm.php" style="color:#F6FF00">房型管理</a></li>
                <li><a href="gm.php">財報圖表</a></li>
            </ul>            
        </div>          
            <table  class="table" border="1">
                <tr>
                    <td>名稱</td>
                    <td>圖片</td>
                    <td>描述</td>
                    <td>價格</td>
                    <td>剩餘房數</td>
                    <td>修改</td>
                </tr>
                <?php
                    $q="SELECT * FROM room";
                    $ans=mysqli_query($db,$q);
                    while($row=mysqli_fetch_assoc($ans)){
                            echo "<tr>";
                            echo "<td>".$row['rname']."</td>";
                            echo "<td><img src=".$row['img']." alt=尚未上傳圖片 width=300px height=240px></td>";
                            echo "<td>".$row['des']."</td>";
                            echo "<td>NT$".$row['p']."</td>";
                            echo "<td>".$row['c']."</td>";
                            echo "<td><button class=a onclick='edit(".$row['id'].")'>修改</button></td>";
                            echo "</tr>";
                    }                                
                ?>
            </table>
            <br><br>
            <div style="text-align:center;">
                <button  onclick="add()" class="a" style="top:600px;left:480px;height:50px;width:270px;">新增房型</button>
            </div>


</body>
</html>