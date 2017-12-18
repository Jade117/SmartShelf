<?php
  include("function/condb.php");
  include("function/db_pdo_conn.php");
?>

  <title>SmartShelf</title>
  <link rel="shortcut icon" href="img/logo.png"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/newHome_style.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/table.css" />
  <style>
  
    body {
	    background-image: url(img/p3.jpg);
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    background-position: center;
	    background-size: cover;
	}

  	#footer {
		position:fixed;
		left:95%;
		bottom:2%;
	}
	#footerback,
	#footernext {
		text-align: center;        
		width: 50px;
		float: right; 
	}

	body {font-family: "Lato", sans-serif}
	.w3-wide {letter-spacing: 10px;}
	.w3-hover-opacity {cursor: pointer;}

  </style>

<!--Navbar-->
<div class="w3-top" style="font-family:Microsoft JhengHei;">
  <ul class="w3-navbar w3-black w3-card-2 w3-left-align">
	  <!--設定時間-------------------------------------------------------------------------->
	  <?php
	  date_default_timezone_set('Asia/Taipei');
	  $date = date('Y-m-d H:i:s');
	  ?>
	  <!--設定時間END----------------------------------------------------------------------->
  
  	  <!--顯示店家-------------------------------------------------------------------------->
  	  <?php
	    $get_shop_id = @$_GET['shop_id'];
		$shop = "SELECT * FROM shop WHERE shop_id = '$get_shop_id'";
		$get_shop = $db->query($shop);
		
		$sql = "SELECT * FROM shop";
		$result = $db->query($sql);
      
	  if($shop_data = $get_shop->fetch()) {
		echo '<li class="w3-hide-small w3-dropdown-hover"><div>';
		echo '<a href="javascript:void(0)" class="w3-hover-none w3-Indigo w3-hover-Indigo w3-hover-text-white w3-padding-large  "><b>';
		echo @$shop_data[1];	//shop name
		echo '</b></a>';
	  }
	  else{
		  echo '<li class="w3-hide-small w3-dropdown-hover"><div>';
		  echo '<a href="javascript:void(0)" class="w3-hover-none w3-Indigo w3-hover-Indigo w3-hover-text-white w3-padding-large">
		  <b>&nbsp&nbsp&nbsp Stores &nbsp&nbsp&nbsp</b></a>';		//index2改改
	  }

      echo '<div class="w3-dropdown-content w3-white w3-text-black">';
			while($shop_data = $result->fetch()) {
				echo '<a href="index2_english.php?&shop_id='.$shop_data[0].'" class="w3-text-black"><b>';		//shop id
				echo $shop_data[1];	//shop name
				echo '</b></a>';
			}
	  echo '</div></li>';
	  ?>
	  <!--顯示店家END------------------------------------------------------------------------>

      <!--顯示該店家的櫃子------------------------------------------------------------------>
		<?php
			$sql2 = "SELECT * FROM shelf where shop_id = '$get_shop_id'";
			$result2 = $db->query($sql2);
			$count=0;
			$count2=0;

			$row = "SELECT * FROM row where shop_id = '$get_shop_id' ORDER BY shelf_id";
			$result3 = $db->query($row);

		  while($shelf_data = $result2->fetch()) {
			echo '<li class="w3-hide-small w3-dropdown-hover w3-text-white">';
			echo '<a href="javascript:void(0)" class="w3-hover-none w3-padding-large w3-text-white">';
			echo @$shelf_data[2];		//shelf name
			echo '</a>';
			echo '<div class="w3-dropdown-content w3-white" id="drop';
			echo @$count;
			echo '" value="';
			echo @$shelf_data[3];		//row num
			echo '"></div></li>';
			$count++;

			while($row_data = $result3->fetch()){			//讀取row_data,建立超連結			
			  	echo '<div style="display:none" id="link';	//style="display:none" 可能不支援
				echo @$count2;	
				echo '">';
				echo 'row_english.php?row_id=';
				echo @$row_data[1];
				echo '&shelf_id=';
				echo @$row_data[0];
				echo '&shop_id=';
				echo @$get_shop_id;
				echo '</div>';
				$count2++;
			  }
		  }
	  	?>
	  <!--顯示該店家的櫃子END---------------------------------------------------------------->
	
	  <!--店家與展示櫃的新增、刪除、修改------------------------------------------------------>
		<?php
		  if($get_shop_id) {
			echo '<li class="w3-hide-small w3-red w3-right w3-dropdown-hover">';
			echo '<a href="javascript:void(0)" class="w3-hover-red w3-padding-large w3-text-white"><b>　Settings　</b></a>';
			echo '<div class="w3-dropdown-content w3-white">';
			echo '<a href="info_shop_english.php?&shop_id='.$get_shop_id.'" class="w3-text-black">Analysis Chart</a>';  // 統計圖表
			echo '<a href="add_shelf_english.php?&shop_id='.$get_shop_id.'" class="w3-text-black">Create Shelf</a>';	// shop id
			echo '<a href="edit_shop_english.php?&shop_id='.$get_shop_id.'" class="w3-text-black">Edit Store</a>';		
			echo '<a href="del_shop_english.php?&shop_id='.$get_shop_id.'" class="w3-text-black">Delete Store</a>';
			echo '</div></li>';
		  }
		  else{
			echo '<li class="w3-hide-small w3-red w3-right w3-dropdown-hover">';
			echo '<a href="javascript:void(0)" class="w3-hover-red w3-padding-large w3-text-white"><b>　Settings　</b></a>';
			echo '<div class="w3-dropdown-content w3-white w3-text-black" >
				  <a href="add_shop_english.php">Create Store</a>
				  <a href="explain_english.php">Service</a>
				  <a href="aboutus_english.php">Credits</a>
				  <a href="index.php">中文版</a> 
				  </div></li>';     // 中文版
		  }
		?>
	<!--店家與展示櫃的新增、刪除、修改END-------------------------------------------------->
  </ul>
</div>

<div id="footer">
	<div id="footerback">
	<a href=index_english.php><img src="img/logo.png"  title="Home"/></a>
	</div>
</div>

<?php
	$row = "SELECT * FROM row where shop_id = '$get_shop_id'";
	$result = $db->query($row);
?>
<script type="text/javascript">	
	var id_count;
	var count=0;

	//生成下拉選單
	window.onload = function add(){
		for(id_count=0; id_count<20; id_count++){
			var row_num=document.getElementById("drop"+id_count).getAttribute('value');		// 取得value (num of rows)
			for(var row=1; row<=row_num; row++){								// 逐row生成下拉選單
				  var x=document.getElementById("drop"+id_count);				
				  var y=document.getElementById("link"+count).innerHTML;		// 分配各row超連結
				  x.innerHTML+="<a href='"+y+"' class='w3-text-black'>Row "+row+" </a> ";
				  count++;
			 }
		 }
	 count=0;
	}
	//生成下拉選單END
</script>

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