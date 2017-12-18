<?php include("navbar.php"); ?>
<?php $get_shop = $db->query($shop); ?>
<html>
    <head>
    </head>

	<body>
		<div class="wrapper">
			<div style="margin-top: 10%;">
				<div id="form_wrapper" class="w3-card-4 form_wrapper" style="margin-left: 22%">
					<form name="form" method="post" action="" class="login active" style="width: 150%">
						<header class="w3-container w3-black">
						<!--<h1>確定要刪除 <font color="red"><?php //if($shop_data = $get_shop->fetch()) echo $shop_data[1]; ?></font> 嗎？</h1>-->
							<h1>刪除 <font color="red"><?php if($shop_data = $get_shop->fetch()) echo $shop_data[1]; ?></font></h1>
						</header>
						<div>
							<label>注意：<br><br>請小心使用本功能 !<br>若刪除此店家後，將無法再復原它。</label>
						</div>
						<div class="bottom">
							<input type="submit" name="button" value="刪除" /></input>
							<input type="button" value="取消" onclick="history.back()" />
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
	if($_POST)
	{
		$del_shelf = "DELETE FROM shelf WHERE shop_id = '$get_shop_id'";
		$stmt = $db->prepare($del_shelf);
		$stmt->execute();
		
		$del_shop = "DELETE FROM shop WHERE shop_id = '$get_shop_id'";
		$stmt2 = $db->prepare($del_shop);
		$stmt2->execute();
		
		$del_row = "DELETE FROM row WHERE shop_id = '$get_shop_id'";
		$stmt3 = $db->prepare($del_row);
		$stmt3->execute();
		
		echo '<script>window.location.href = "index.php";</script>';
	}
	?>
    </body>

</html>