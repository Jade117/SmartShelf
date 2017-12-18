<html>
  <head>
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
  </style>
  </head>

	<body>
		<div class="wrapper">
			<div style="margin-top: 10%;">
				<div id="form_wrapper" class="w3-card-4 form_wrapper" style="margin-left: 22%">
					<form name="form" method="post" action="" class="login active" style="width: 150%">
						<header class="w3-container w3-black">
							<h1>登入 SmartShelf 系統</h1>
						</header>
						<div>
							<label>電子信箱:</label>
							<input type="email" name="set_shop_name" required/>
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>密碼:</label>
							<input type="password" name="set_shop_describtion" maxlength="20" required/>
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<input type="submit" name="button" value="登入" /></input>
							<input type="button" value="註冊" onclick="location.href='register.php'" />
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php
	if($_POST)
	{
		echo '<script>window.location.href = "index.php";</script>';
	}
	?>
    </body>
	
</html>