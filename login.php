<?php
echo <<<_END
	<html>
		<head>
			<title>Login</title>
			<link rel='stylesheet' href='./styles.css'>
		</head>
		<body>
			<a>
				<br>
				<center>
				<img height='100' width='200' src='./images/library_logo.jpg'></img>
				</center>
				<br>
				<br>
			</a>
			<form method="post" action ="./library_home.php">
				<center>
				Username
				<input type ="text" name="name">
				<br>
				<br>
				Password
				<input type ="password" name="pass">
				<br>
				<br>
				<input type="submit" value="Login">
				</center>
			</form>
		</body>
	</html>
_END;
?>