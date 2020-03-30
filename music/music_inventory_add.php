<?php
	echo <<<_END
		<html>
			<head>
				<title>Music Inventory Add</title>
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
				<form method="post" action ="music_inventory.php">
					<center>
					Music ID:
					<input type='text' name='id'>
					<br>
					Artist Name:
					<input type='text' name='artist_name'>
					<br>
					Album Name:
					<input type='text' name='album_name'>
					<br>
					Genre:
					<input type='text' name='genre'>
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