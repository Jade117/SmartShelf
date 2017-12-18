<?php include("navbar_english.php"); ?>
<html>
<head>
<link rel="shortcut icon" href="img/logo.png"/>
<style>
    body { background-image: url(img/p3.jpg); }
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
				echo '<div class="w3-display-middle">';
				echo '<span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity" style="margin-top: -50px; font-family: 微軟正黑體;">';
				echo '網頁說明';	//shop name
				echo '</span></div>';
			  //}
					
		?>
	</div>
	<!--顯示各店家資訊END-->
</body>
</html>
<!--

                       _oo0oo_
                      o8888888o
                      88" . "88
                      (| -_- |)
                      0\  =  /0
                    ___/`---'\___
                  .' \\|     |# '.
                 / \\|||  :  |||# \
                / _||||| -:- |||||- \
               |   | \\\  -  #/ |   |
               | \_|  ''\---/''  |_/ |
               \  .-\__  '-'  ___/-. /
             ___'. .'  /--.--\  `. .'___
          ."" '<  `.___\_<|>_/___.' >' "".
         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
         \  \ `_.   \_ __\ /__ _/   .-` /  /
     =====`-.____`.___ \_____/___.-`___.-'=====
                       `=---='


     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

               佛祖保佑         永無BUG
-->