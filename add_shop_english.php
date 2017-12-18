<?php include("navbar_english.php"); ?>
<html>
    <head>
    </head>

	<body>
		<div class="wrapper">
			<div style="margin-top: 10%;">
				<div id="form_wrapper" class="w3-card-4 form_wrapper" style="margin-left: 22%">
					<form name="form" method="post" action="" class="login active" style="width: 150%">
						<header class="w3-container w3-black">
							<h1>Create Store</h1>
						</header>
						<div>
							<label>Name:</label>
							<input type="text" name="set_shop_name" maxlength="15" required/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Description:</label>
							<input type="text" name="set_shop_describtion" maxlength="20" required/>
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" name="button" value="Create" /></input>
							<input type="button" value="Cancel" onclick="history.back()" />
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
	if($_POST)
	{
		$set_shop_name = $_POST['set_shop_name'];
		$set_shop_describtion = $_POST['set_shop_describtion'];
		$add_shop = "INSERT INTO shop( shop_name, shop_id, shop_describtion ) VALUES ('$set_shop_name', 'shop $date', '$set_shop_describtion')" ;
		$stmt = $db->prepare($add_shop);
		$stmt->execute();
		echo '<script>window.location.href = "index.php";</script>';
	}
	?>
    </body>
	
</html>