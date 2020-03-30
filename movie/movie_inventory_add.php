<?php
	echo <<<_END
		<html>
			<head>
				<title>Movie Inventory Add</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					</center>
					<br>
					<br>
				</a>
				<form method="post" action ="movie_inventory.php">
					<center>
					Movie ID:
					<input type='text' name='id'>
					<br>
					Movie Name:
					<input type='text' name='name'>
					<br>
					Genre:
					<input type='text' name='genre'>
					<br>
					Director:
					<input type='text' name='director'>
					<br>
					Release Year:
					<input type='text' name='year'>
					<br>
					<input type='submit' value='Add'>
					</center>
				</form>
			</body>
		</html>
	_END;
?>