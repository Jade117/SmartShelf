<?php include("navbar.php"); ?>  	
<html>
<head>
<link rel="shortcut icon" href="img/logo.png"/>
<style>
    body { background-image: url(img/p3.jpg); }
	
	div.content {
		z-index: 1; 
		margin:0 auto;
		width:60%;
		height:50%;
	}
	
	div.content:after {
		z-index: -1;
		content: '';
		position: absolute; 
		top: 15%; 
		left: 15%; 
		right: 15%; 
		bottom: 5%; 
		background-color: rgba(255,255,255,0.75); 		 
		border-radius:50px
	}
</style>
</head>

<body>	  
	<!--顯示各店家資訊-->
	<div class="content">
		<?php
			//$get_shop_id = @$_GET['shop_id'];									註解處皆已包含於navbar.php
			//$shop = "SELECT * FROM shop WHERE shop_id = '$get_shop_id'";
			$get_shop = $db->query($shop);			
			//$sql = "SELECT * FROM shop";
			//$result = $db->query($sql);     
			  //if($shop_data = $get_shop->fetch()) {
				//echo '<div class="w3-display-middle">';
				//echo '<span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity" style="margin-top: -50px; font-family: 微軟正黑體;">';
				//echo '網頁說明';	//shop name
				//echo '</span></div>';
			  //}				
		?>
		<br><br><br><br><br><br>
		<a>
		<h3><b>網頁操作說明</b></h3><br>
			回首頁, 請點選右下角<font color="#DBA901"> 黃色首頁</font>圖示<br>
			顯示店家清單, 請點選左上角<font color="#0101DF"> 藍色商店列表</font><br><br>
		
	        新增店家, 請在首頁右上角 <font color="red">選項</font> &rarr; 輸入店家名稱與描述<br>
	        編輯店家, 請在首頁點選店家 &rarr; 右上角 <font color="red">選項</font> &rarr; 編輯店名與描述<br>
	        刪除店家, 請在首頁點選店家 &rarr; 右上角 <font color="red">選項</font><br><br>
			
			新增展示櫃, 請在首頁點選店家 &rarr; 右上角 <font color="red">選項</font> &rarr; 輸入展示櫃名稱與排數<br>
			刪除展示櫃, 請在首頁點選店家 &rarr; 選擇展示櫃 &rarr; 點選右下角<font color="#FFBF00"> 黃色刪除</font>圖示<br><br>
			
			新增商品, 請在首頁點選店家 &rarr; 選擇展示櫃之排數 &rarr; 點選右下角<font color="#088A08"> 綠色新增</font>圖示<br>
			修改商品, 請在首頁點選店家 &rarr; 選擇展示櫃之排數 &rarr; 左側點選商品 &rarr; 點選右下角<font color="#01A9DB"> 藍色修改</font>圖示<br>
			刪除商品, 請在首頁點選店家 &rarr; 選擇展示櫃之排數 &rarr; 左側點選商品 &rarr; 點選右下角<font color="red"> 紅色刪除</font>圖示<br>
		</a>
	</div>
	<!--顯示各店家資訊END-->
</body>
</html>
