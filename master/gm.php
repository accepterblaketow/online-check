<?php
    include "../conn.php";

    $q="SELECT * FROM `room`";
    $ans=mysqli_query($db,$q);
    $room=array();
    $sum=array();
    $c=mysqli_num_rows($ans);
    $i=0;
    while($row=mysqli_fetch_assoc($ans)){
        array_push($room,$row['rname']);
        $roomid=$row['id'];
        $q="SELECT SUM(`p`) FROM `log` WHERE `roomid`='$roomid'";
        $s=mysqli_fetch_array(mysqli_query($db,$q));
        array_push($sum,$s[0]);
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../lo.ico">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../jquery-ui-1.13.0/jquery-ui.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
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
    </style>
    <script>
       $(function() {
       
    var chart = {
        type: 'column'
    };
   var title = {
       text: '收入總表'   
   };
   var subtitle = {
        text: ''
   };
   var xAxis = {
       categories:<?php 
                        echo "[";
                        for($i=0;$i<count($room);$i++){
                            echo "'".$room[$i]."'";
                            if($i<count($room)-1)
                                echo ",";
                        }
                        echo "]";
                  ?>
   };
   var yAxis = {
      min: 0,
      title: {
         text: '金額NT$'
      },

      gridLineColor:'#FFFF37',
   };   

   var tooltip = {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
         '<td style="padding:0"><b>{point.y} NT$</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
   };
   var plotOptions = {
      column: {
         pointPadding: 0.2,
         borderWidth: 0
      }
   };  
   var credits = {
      enabled: false
   };
   var series =  [{
        name: '金額',
       <?php
            echo "data:[";
            for($i=0;$i<count($sum);$i++){
                echo $sum[$i];
                if($i<count($sum)-1){
                    echo ",";
                }
            }
            echo "]";
      ?>
      },
   ];

   var json = {};

   json.chart = chart; 
   json.title = title;   
   json.subtitle = subtitle; 
   json.tooltip = tooltip;
   json.xAxis = xAxis;
   json.yAxis = yAxis;  
   json.series = series;
   json.plotOptions = plotOptions;  
   json.credits = credits;

   $('#chart').highcharts(json);
});
    </script>

    </head>
<body bgcolor="#80FFFF"> 
        <div id="t" style="background-color: #2828FF;display: block;height:70px;">
            <span style="float:right;"><button class="btn btn-outline-light text-dark" onclick="location.href='../logout.php'">登出</button></span>
            <ul id="t" style="font-size: 0;position: absolute;top:25px">
                <li><a href="dm.php">訂單管理</a></li>
                <li><a href="rm.php">房型管理</a></li>
                <li><a href="gm.php" style="color:#F6FF00">財報圖表</a></li>
            </ul>            
        </div>
        <div id="chart" style="width: 600px; height: 500px; margin: 50px auto"></div>
</body>
</html>