<?php
	echo <<<_END
		<html>
			<head>
				<title>Movie Inventory</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="movie_inventory_add.php">
					<input type="submit" value="add movie">
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