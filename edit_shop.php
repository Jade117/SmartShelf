<?php include("navbar.php"); ?>
<html>
    <head>
    </head>

	<body>
		<div class="wrapper">
			<div style="margin-top: 10%;">
				<div id="form_wrapper" class="w3-card-4 form_wrapper" style="margin-left: 22%">
					<form name="form" method="post" action="" class="login active" style="width: 150%">
						<header class="w3-container w3-black">
							<h1>編輯店家</h1>
						</header>
						<div>
							<label>重新命名店家:</label>
							<input type="text" name="edit_shop_name" maxlength="15" required/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>修改店家描述:</label>
							<input type="text" name="edit_shop_describtion" maxlength="20" required/>
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" name="button" value="儲存" /></input>
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
		$edit_shop_name = $_POST['edit_shop_name'];
		$edit_shop_describtion = $_POST['edit_shop_describtion'];
		$edit_shop = "UPDATE shop SET shop_name = '$edit_shop_name', shop_describtion = '$edit_shop_describtion' WHERE shop_id = '$get_shop_id'" ;
		$stmt = $db->prepare($edit_shop);
		$stmt->execute();
		echo '<script>window.location.href = "index2.php?&shop_id='.$get_shop_id.'";</script>';
	}
	?>
    </body>
	
</html>