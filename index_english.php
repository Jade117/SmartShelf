<?php include("navbar_english.php"); ?>  	
<html>
<head>
<link rel="shortcut icon" href="img/logo.png"/>
<style>

    body { background-image: url(img/p3.jpg); }
	
	div.content {
		text-align: center;
		margin:0 auto;
		width:60%;
		height:50%;
		margin-top: 5%;
	}

	div.card {		
		width:30%; 
		float:left;  
		background-color: 
		rgba(255,255,255,0.75);
	}
</style>
</head>

<body>	  
	<!--顯示各店家資訊-->
	<br>
	<br>
	<br>
	<div class="content" style="padding-bottom:40px;">
		<?php
			$result = $db->query($sql);
			$css_count = 0;
			while($shop_ = $result->fetch()) {
				echo '<a href="index2_english.php?&shop_id='.$shop_[0].'">'; //shop id
					echo '<div class="w3-card-4 card" style="';
						if($css_count%3==0 && $css_count>2){		//最左排
							echo 'margin-top: 5%;';
						}else if($css_count%3>0 && $css_count>2){	//除去最上列與最左排
							echo 'margin-top: 5%;';
							echo 'margin-left: 5%;';
						}else if($css_count%3>0 && $css_count>0){	//第一列
							echo 'margin-left: 5%;';
						}
					echo'">';
						echo '<header class="w3-container w3-Black"><p>';		// header
						echo $shop_[1];	//shop name
						echo '</p></header>';

						echo '<div class="w3-container w3-center"><p><br>';		//描述
						echo $shop_[2];
						echo '<br><br></p></div>';
					echo '</div>';
				echo '</a>';
				$css_count++;
			}
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