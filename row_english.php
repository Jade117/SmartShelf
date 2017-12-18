<?php include("navbar_english.php"); 
	$get_look = @$_GET["temp"];
	$get_think = @$_GET["temp2"];
	$get_key = @$_GET["temp3"];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	  	#footer2 {
			position:fixed;
			left:90%;
			bottom:2%;
		}
		#footerback2,
		#footernext2 {
			text-align: center;        
			width: 50px;
			float: right; 
		}
		#footer3 {
			position:fixed;
			left:95%;
			bottom:12%;
			text-align: center;        
			width: 50px;
			float: right; 
		}

		#footer4 {
			position:fixed;
			left:95%;
			bottom:22%;
			text-align: center;        
			width: 50px;
			float: right; 
		}

		#footer5 {
			position:fixed;
			left:95%;
			bottom:32%;
			text-align: center;        
			width: 50px;
			float: right; 
		}
		
	</style>
</head>
<body>
<?php
	$get_row_id = @$_GET['row_id'];
	$get_shelf_id = @$_GET['shelf_id'];
	include("row_table_english.php");		//顯示的Table

	////////////////////	新增格子
	if($_POST && $_POST["doAdd"]=="1"){
		$add_grid = "INSERT INTO grid( grid_id, row_id, shop_id, name, look, think, sold) VALUES ('grid $date', '$get_row_id', '$get_shop_id', 'Untitled', '0','0','0')" ;
		$stmt = $db->prepare($add_grid);
		$stmt->execute();
		echo '<script>window.location.href = "row_english.php?row_id='.$get_row_id.'&shelf_id='.$get_shelf_id.'&shop_id='.$get_shop_id.'";</script>';
	}

	////////////////////	修改選定的格子
	if($_POST && $_POST["doEdit"]=="1"){
		$get_grid_id = $_GET['grid_id'];
		$edit_name_grid = $_POST['edit_name_grid'];
		$edit_sold = $_POST['edit_sold'];
		$edit_look = $_POST['edit_look'];
		$edit_think = $_POST['edit_think'];
		
		$edit_grid = "UPDATE grid SET sold = '$edit_sold' , name = '$edit_name_grid', look = '$edit_look', think = '$edit_think' WHERE row_id = '$get_row_id'AND grid_id='$get_grid_id'";
		$stmt = $db->prepare($edit_grid);
		$stmt->execute();
		echo '<script>window.location.href = "row_english.php?row_id='.@$get_row_id.'&shelf_id='.@$get_shelf_id.'&shop_id='.@$get_shop_id.'";</script>';
	}

	////////////////////	刪除選定的格子
	if($_POST && $_POST["doDel"]=="1"){
		$get_grid_id = $_GET['grid_id'];
		$del_grid = "DELETE FROM grid WHERE grid_id = '$get_grid_id'";
		$stmt = $db->prepare($del_grid);
		$stmt->execute();
		echo '<script>window.location.href = "row_english.php?row_id='.@$get_row_id.'&shelf_id='.@$get_shelf_id.'&shop_id='.@$get_shop_id.'";</script>';
	}


	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	  

	  if( $get_look != 0 ){
		  $look = "UPDATE grid SET look = '$get_look' WHERE grid_id = '0' ";
		  $stmt = $db->prepare($look);
		  $stmt->execute();
		  mysql_query($look);
	  }
	  if( $get_think != 0 ){
		  $think = "UPDATE grid SET think = '$get_think' WHERE grid_id = '0' ";
		  $stmt = $db->prepare($think);
		  $stmt->execute();
		  mysql_query($think);
	  }
	  if( $get_key != 0 ){
		  $key_value = "UPDATE grid SET key_value = '$get_key' WHERE grid_id = '0' ";
		  $stmt = $db->prepare($key_value);
		  $stmt->execute();
		  mysql_query($key_value);
	  }


	$grid = "SELECT * FROM grid WHERE row_id = '$get_row_id'";
	$result = $db->query($grid);
	$get_grid_id = $_GET['grid_id'];

	while($grid_data = $result->fetch()){
		if($grid_data["grid_id"]=='0'){
			$now_look = $grid_data["look"];
			$now_think = $grid_data["think"];
			$now_key = $grid_data["key_value"];
		}
	}

	
	$grid = "SELECT * FROM grid WHERE row_id = '$get_row_id'";
	$result = $db->query($grid);
	$get_grid_id = $_GET['grid_id'];
	
	while($grid_data = $result->fetch()){		
		if( @$grid_data["grid_id"]  == $grid_id_switch[$now_key] && ($now_look != 0 || $now_think != 0)){
			
			$show_now_id = $grid_id_switch[$now_key];
			
			if($now_look != 0 && $now_think != 0){
				$edit_look_2 = $grid_data["look"]+1;			
				$edit_think_2 = $grid_data["think"]+1;	
			}else if($now_look != 0 ){
				$edit_look_2 = $grid_data["look"]+1;			
				$edit_think_2 = $grid_data["think"];	
			}else if( $now_think != 0){
				$edit_look_2 = $grid_data["look"];			
				$edit_think_2 = $grid_data["think"]+1;
			}
			$edit_grid = "UPDATE grid SET  look = '$edit_look_2', think = '$edit_think_2' WHERE grid_id='$grid_id_switch[$now_key]'";	////////
			$stmt = $db->prepare($edit_grid);
			$stmt->execute();
			mysql_query($edit_grid);
			

					  $look = "UPDATE grid SET look = '0' WHERE grid_id = '0' ";
					  $stmt = $db->prepare($look);
					  $stmt->execute();
					  mysql_query($look);

					  $think = "UPDATE grid SET think = '0' WHERE grid_id = '0' ";
					  $stmt = $db->prepare($think);
					  $stmt->execute();
					  mysql_query($think);

		}
	}
	
	$grid = "SELECT * FROM grid WHERE row_id = '$get_row_id'";
	$result = $db->query($grid);
	$get_grid_id = $_GET['grid_id'];
	
	while($grid_data = $result->fetch()){
		if($grid_data["grid_id"]== 	$show_now_id){
			echo '<p已更新: '.$grid_data["neame"].'</p>';
		}
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
	<div id="footer2">
		<div id="footerback2">
			<?php echo '<a href="del_shelf_english.php?shelf_id='.@$get_shelf_id.'&shop_id='.@$get_shop_id.'"><img src="img/deleteRow.png" title="刪除本櫃"/></a>'; ?>
		</div>
	</div>
	<div id="footer3"> 
		<form id="form2" name="form2" method="post" action="" class="login active" style="width: 150%">
			<input style="display:none" name="doAdd" value="0"/></td>
			<input style="display:none" name="doEdit" value="0"/></td>
			<input style="display:none" name="doDel" value="1"/></td>
			<input name="submit" type="image" value="" src="img/delete.png"  width="64" height="64" title="刪除本格" onclick="return confirm('真的要刪除該商品嗎?');"/><!-- 刪除 -->
		</form>
	</div>
	<div id="footer4"> 
		<form id="form1" name="form1" method="post" action="" onclick="set_edit()" class="login active" style="width: 150%">
			<input style="display:none" name="doAdd" value="0"/>
			<input style="display:none" name="doEdit" value="1"/>
			<input style="display:none" name="doDel" value="0"/>

			<?php $get_grid_id = $_GET['grid_id']; 
				echo '<input type="text" style="display:none"  name="edit_name_grid" maxlength="20" required id="edit_name"/>
					  <input type="text" style="display:none"  name="edit_sold" maxlength="10" required id="edit_sold"/>
					  <input type="text" style="display:none"  name="edit_look" maxlength="10" required id="edit_look"/>
					  <input type="text" style="display:none"  name="edit_think" maxlength="10" required id="edit_think"/>';
			?>
			<input name="submit" type="image" value="" src="img/edit.png" width="64" height="64" title="修改本格"/><!-- 修改 -->
		</form>
	</div>

	<div id="footer5"> 
		<form id="form0" name="form0" method="post" action="" class="login active" style="width: 150%">
		    <input style="display:none" name="doAdd" value="1"/>
		    <input style="display:none" name="doEdit" value="0"/>
		    <input style="display:none" name="doDel" value="0"/>
		  	<input name="submit" type="image" value="" src="img/add.ico" width="64" height="64" title="新增本格"/><!-- 新增 -->
		</form>
	</div>
</body>

<script type="text/javascript">
	function set_edit(){
		document.getElementById("edit_name").value = document.getElementById("name"+<?php echo json_encode($get_grid_id); ?>).value ;
		document.getElementById("edit_sold").value = document.getElementById("sold"+<?php echo json_encode($get_grid_id); ?>).value ;
		document.getElementById("edit_look").value = document.getElementById("look"+<?php echo json_encode($get_grid_id); ?>).value ;
		document.getElementById("edit_think").value = document.getElementById("think"+<?php echo json_encode($get_grid_id); ?>).value ;
	}

	function set_edit2(){
		document.getElementById("edit_look").value = document.getElementById("look"+<?php echo json_encode($get_grid_id); ?>).value ;
		document.getElementById("edit_think").value = document.getElementById("think"+<?php echo json_encode($get_grid_id); ?>).value ;
	}
</script>