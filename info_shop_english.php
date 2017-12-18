<?php include("navbar_english.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
 $con = mysqli_connect('localhost','root','E125239511','smartshelf'); // 記得改自己的帳密
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Analysis Chart
 </title>
  <style>
	.container {
	  display: flex;
	  flex-flow: row wrap;
	  justify-content: center;
	  align-items: center;
	  text-align: center;
	}
	#barchart {
	  display: inline-block;
	  margin: 0 ;
	}	
	#piechart {
	  display: inline-block;
	  margin: 0 ;
	}
	#columnchart1 {
	  display: inline-block;
	  margin: 0 ;
	}
	#columnchart2 {
	  display: inline-block;
	  margin: 0 ;
	}
 </style>
 <!------------------------------------------ 置中 2 ------------------------------------>
 <!----------------------------------------------------------------------------------------------->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
	 google.load('visualization', '1', {packages: ['corechart', 'bar']});
	 google.setOnLoadCallback(drawMaterial);
	 function drawMaterial() {
	 var data = google.visualization.arrayToDataTable([
	 ['商品', 'Take a look', 'Hesitation'],
	 <?php 
	 $query = "SELECT think AS count, name FROM grid WHERE shop_id = '$get_shop_id' GROUP BY grid_id";
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
	 echo "['".$row['name']."',";
	 $query2 = "SELECT look AS count FROM grid WHERE name='".$row['name']."' ";
	 $exec2 = mysqli_query($con,$query2);
	 $row2 = mysqli_fetch_assoc($exec2);
	 echo $row2['count'];
	 $rvisits = $row['count'];
	 echo ",".$rvisits."],";
	 }
	 ?>
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                      2,
                      { calc: "stringify",
                        sourceColumn: 2,
                        type: "string",
                        role: "annotation" }
					  ]);				   
	 var options = {
	 title: 'Analysis of consumer behavior and times',
	 //title: '觸及商品狀態與次數',
	 colors: ['#0091D5','#1C4E80'],
	 seriesType: 'bars'
     //series: {0: {type: 'line'}}
	 };
	 var material = new google.visualization.ComboChart(document.getElementById('barchart'));
	 material.draw(view, options); //(data, options)改view
	 }
</script>
<!---------------------------------------------- 置中 2 --------------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Browser', 'Visits'],
	 <?php 
	 $query = "SELECT sold AS count, name FROM grid WHERE shop_id = '$get_shop_id' GROUP BY grid_id";
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
	 echo "['".$row['name']."',".$row['count']."],";
	 }
	 ?>
	 ]);
	 var options = {
	 title: 'Number and ratio of commodity sales',
	 //最多16色不會重複
	 colors: ['#7E909A','#1C4E80','#488A99','#EA6A47','#DBAE58','#0091D5','#4CB5F5','#202020',
			  '#1F3F49','#D32D41','#6AB187','#B3C100','#CED2CC','#23282D','#484848','#AC3E31'],
	 //is3D: true, // 可以改3D但不可與piehole同用
	 pieHole: 0.4, // 甜甜圈
	 legend:'left', // 說明在左 圖在右
	 slices: {  0: {offset: 0.1},// 分片
				//2: {offset: 0.3},
          },
	 pieSliceText: 'value', // 顯示個數
	 pieSliceTextStyle: {
            color: '#DDDDDD',
		}
	 };
	 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	 chart.draw(data, options);
	 }
</script>
<!----------------------------------------- 置中 3 ----------------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Name', 'minutes'],
	 <?php 
	 $query = "SELECT 5*sum(look)+15*sum(think) AS count1, name FROM grid WHERE shop_id = '$get_shop_id' GROUP BY grid_id";	 	 
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){		 
	 $minutes = $row['count1']/60; // 由秒鐘換成分鐘
	 echo "['".$row['name']."',".$minutes."],"; 
	 //echo "['".$row['name']."',".$row['count1']."],";
	 }
	 ?>	 
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" }
					  ]);		
	 var options = {
		 colors: ['#A5D8DD'],
	 title: 'Total touched time of each commodity'
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart1"));
	 chart.draw(view, options);
	 }
</script>	 
<!------------------------------------------- 置中 1--------------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Name', '點數'],
	 <?php 
	 $query = "SELECT (5*sum(look)+15*SUM(think))*SUM(sold) AS count1, name FROM grid WHERE shop_id = '$get_shop_id' GROUP BY grid_id";	 
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
	
	 $query2 = $query = "SELECT SUM(sold) AS count2 FROM grid WHERE shop_id = '$get_shop_id'"; // 所有商品賣出的總數
	 $exec2 = mysqli_query($con,$query2);
	 $row2 = mysqli_fetch_assoc($exec2);
	 
	 $rvisits = 0.1*$row['count1']/$row2['count2']; // 各商品的加權指數: 0.1(常數) * 觸及時數(秒) * 各商品賣出的百分比
	 echo "['".$row['name']."',".$rvisits."],";
	 }
	 ?>	 
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" }
					  ]);		
	 var options = {
	 title: 'Commodity potential index',
	 //title: '商品潛力加權指數',
	 //backgroundColor: '#E4E4E4', // 背景色
	 lineWidth: 5,
	 legend: 'none',
	 colors: ['#EA6A47'], // https://developers.google.com/chart/interactive/docs/lines
	 crosshair: { trigger: 'both' },   // Display crosshairs (十字軸滑過)
     tooltip: { trigger: 'selection' } // Display tooltips on selection (十字軸點擊)
	 // https://developers.google.com/chart/interactive/docs/printing
	 };
	 var chart = new google.visualization.ComboChart(document.getElementById("columnchart2"));
	 chart.draw(view, options);
	 }
</script>
<!--------------------------------------------------------- 暫時沒用 --------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart","gauge"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Name', '個數'],
	 <?php 
	 //$query = "SELECT AVG(5*sum(look)+15*sum(think) AS count1), name FROM grid";	 
	 $query = "SELECT AVG(sold) AS count1 , name FROM grid";	 
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
	 echo "['".$row['name']."',".$row['count1']."],";
	 }
	 ?>	 
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" }
					  ]);		
	 var options = {
		 colors: ['#AAAAAA'],
	 title: '實際銷售總平均量'
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart3"));
	 chart.draw(view, options);
	 }
</script>
<!--------------------------------------------------------- 置中 3 --------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart","gauge"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Name', 'minutes'],
	 <?php 
	 //$query = "SELECT AVG(5*sum(look)+15*sum(think) AS count1), name FROM grid";	 
	 $query = "SELECT 5*AVG(look)+15*AVG(think) AS count1 , name FROM grid WHERE shop_id = '$get_shop_id'";	 
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
	 $minutes = $row['count1']/60; // 由秒鐘換成分鐘
	 echo "['total average',".$minutes."],"; 
	 //echo "['".$row['name']."',".$row['count1']."],";
	 }
	 ?>	 
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" }
					  ]);		
	 var options = {
		 colors: ['#A5D8EE'],
	 title: 'Average touched time of all commodities'
	 //就是觸及所有商品的總時數的平均
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart4"));
	 chart.draw(view, options);
	 }
</script>		  
<!--------------------------------------------------------- 置中 1--------------------------->
<!----------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	 google.load("visualization", "1", {packages:["corechart"]});
	 google.setOnLoadCallback(drawChart);
	 function drawChart() {
	 var data = google.visualization.arrayToDataTable([
	 ['Name', 'per minute'],
	 <?php 
	 $query = "SELECT (5*AVG(look)+15*AVG(think))/60 AS count1 , name FROM grid WHERE shop_id = '$get_shop_id'";// 由秒鐘轉分鐘
	 $exec = mysqli_query($con,$query);
	 while($row = mysqli_fetch_array($exec)){
		 
	 $query2 = $query = "SELECT AVG(sold) AS count2 FROM grid WHERE shop_id = '$get_shop_id'"; // 所有商品平均賣出的總數	
	 $exec2 = mysqli_query($con,$query2);
	 $row2 = mysqli_fetch_assoc($exec2);
	 
	 $rvisits=$row2['count2']/$row['count1']; // 平均總數 / 平均觸及分鐘
	 echo "['total average',".$rvisits."],";
	 }
	 ?>	 
	 ]);
	 // 在column上顯示數字
	 var view = new google.visualization.DataView(data);
     view.setColumns([0,
					  1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" }
					  ]);		
	 var options = {
	 title: 'Sales conversion rate',
	 //就是摸到商品後,全店平均每分鐘可以賣掉多少個商品
	 //title: '商品銷售總轉換率',
	 colors: ['#EE7700']
	 //backgroundColor: '#E4E4E4', // 背景色
	 };
	 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart5"));
	 chart.draw(view, options);
	 }
</script>
<!----------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------->
</head>
<body><br><br><br>
	 <!--<h3 style="font-weight:bold;" align="center"><font color="#1C4E80">店家數據分析圖表</font></h3>-->
	 <div class = "container"> <!-- 置中 1 -->		
		<div id="columnchart2" style="width:60%; height: 26%; border: 1px solid #ccc;"></div>
		<div id="columnchart5" style="width:30%; height: 26%; border: 1px solid #ccc;"></div>
	 </div><br>
	 <div class = "container"> <!-- 置中 2 -->
		<div id="barchart" style="width: 60%; height: 28%; border: 1px solid #ccc;"></div>
		<div id="piechart" style="width: 30%; height: 28%; border: 1px solid #ccc;"></div>
		<!--<div id="columnchart3" style="width:30%; height: 28%; border: 1px solid #ccc;"></div>-->
	 </div><br>
	 <div class = "container"> <!-- 置中 3 -->
		<div id="columnchart1" style="width:60%; height: 26%; border: 1px solid #ccc;"></div>
		<div id="columnchart4" style="width:30%; height: 26%; border: 1px solid #ccc;"></div>
	 </div>
</body>
</html>