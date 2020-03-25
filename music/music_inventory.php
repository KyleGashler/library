<?php
	echo <<<_END
		<html>
			<head>
				<title>Music Inventory</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="music_inventory_add.php">
					<input type="submit" value="add music">
				</form>	
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
		
			</body>
		</html>
	_END;
?>