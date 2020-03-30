<?php
	echo <<<_END
		<html>
			<head>
				<title>Music Inventory</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="music_inventory_add.php">
					<input type="submit" value="Add Music">
				</form>	
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<div class="container">
			<div class="col-lg-6 col-md-6  col-sm-12">
				<center>
				<a href="music_details.php">
					<img height='175' width='175' src='../images/lucero_tennessee.jpg'></img>
				</a>
			</div>
		
			</body>
		</html>
	_END;
?>