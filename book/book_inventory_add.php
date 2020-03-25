<?php
	echo <<<_END
		<html>
			<head>
				<title>Book Inventory Add</title>
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
				<form method="post" action ="book_inventory.php">
					<center>
					Book ID:
					<input type='text' name='id'>
					<br>
					Book Name:
					<input type='text' name='name'>
					<br>
					Genre:
					<input type='text' name='type'>
					<br>
					Author:
					<input type='text' name='value'>
					<br>
					Publish Year:
					<input type='text' name='points'>
					<br>
					<input type='submit' value='add'>
					</center>
				</form>
			</body>
		</html>
	_END;
?>