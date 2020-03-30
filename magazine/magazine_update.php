<?php
	echo <<<_END
		<html>
			<head>
				<title>Update Magazine</title>
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
				<form method="post" action ="magazine_inventory.php">
					<center>
					Magazine ID:
					<input type='text' name='id'>
					<br>
					Magazine Name:
					<input type='text' name='name'>
					<br>
					Topic:
					<input type='text' name='type'>
					<br>
					Publisher:
					<input type='text' name='value'>
					<br>
					Publish Year:
					<input type='text' name='points'>
					<br>
					Issue Number:
					<input type='text' name='points'>
					<br>
					<input type='submit' value='update'>
					</center>
				</form>
			</body>
		</html>
	_END;
?>