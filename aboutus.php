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
		text-align:center;
	}
	
	div.content:after {
		z-index: -1;
		content: '';
		position: absolute; 
		top: 10%; 
		left: 15%; 
		right: 15%; 
		bottom: 2%; 
		background-color: rgba(255,255,255,0.75); 
		text-align:center;		
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
				//echo '關於我們';	//shop name
				//echo '</span></div>';
			  //}				
		?>
		<br><br><br><br>
		<a>
		<h3><b>關於我們</b></h3>
		本系統 Smart Shelf 是由國立臺灣海洋大學資訊工程學系專題團隊 WKL 所開發完成.<br>
		WKL 致力於將資訊整合應用於商業, 為企業提供創新方法, 提升銷售業績與服務品質.<br><br>
		  
	   團隊成員: <br>
	   吳岳霖 &nbsp;&nbsp; daniel010007@gmail.com <br>
	   柯俊祺 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; k9120303@gmail.com <br>
	   梁誌軒 &nbsp;&nbsp; siansian1008@gmail.com <br>
	   指導教授: &nbsp;&nbsp; 辛華昀 博士
		</a>
		<br><br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.5494989139634!2d121.77794377862685!3d25.150917183996437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d4f0ec528d257%3A0x9efd5fd3d6594b86!2z5ZyL56uL6Ie654Gj5rW35rSL5aSn5a246LOH6KiK5bel56iL5a2457O7!5e0!3m2!1szh-TW!2stw!4v1505360741085" width="100%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>
	<!--顯示各店家資訊END-->
</body>
</html>