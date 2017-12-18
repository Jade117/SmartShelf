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
							<h1>Create Shelf</h1>
						</header>
						<div>
							<label>Name:</label>
							<input type="text" name="set_shelf_name" required/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Number of Rows:</label>
							<input type="number" name="set_row_num" min="1" max="10" required/>
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
	//設置亂數
	function generateRandomString($length = 15) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	if($_POST)
	{
		$set_shelf_name = $_POST['set_shelf_name'];
		$set_row_num = $_POST['set_row_num'];
		$add_shelf = "INSERT INTO shelf VALUES ('$get_shop_id', 'shelf $date', '$set_shelf_name', $set_row_num, '$date')" ;
		$stmt = $db->prepare($add_shelf);
		$stmt->execute();
		
		$shelf_id = "SELECT shelf_id FROM shelf WHERE shelf_id = 'shelf $date'";
		$result = $db->query($shelf_id);
		
		while(@$get_shelf_id = $result->fetch()){
			for(@$i=0; $i<$set_row_num; $i++){
				$set_row_id = generateRandomString();
				$set_row_data = "INSERT INTO row VALUES ('$get_shelf_id[0]', 'row $set_row_id', '$get_shop_id')" ;
				$stmt2 = $db->prepare($set_row_data);
				$stmt2->execute();
			}
		}
		echo '<script>window.location.href = "index2.php?&shop_id='.$get_shop_id.'";</script>';
	}
	?>
    </body>
	
</html>