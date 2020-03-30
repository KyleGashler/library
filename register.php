<?php
	echo <<<_END
		<html>
			<head>
				<title>Register</title>
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
				<form method="post" action ="./user/user_add.php">
					<center>
					Email:
					<input type='text' name='email'>
					<br>
					Password:
					<input type='text' name='password'>
					<br>
					Name:
					<input type='text' name='name'>
					<br>
					</center>
				</form>
			</body>
		</html>
	_END;
?>