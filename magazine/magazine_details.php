<?php
	echo <<<_END
		<html>
			<head>
				<title>Magazine Details</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="magazine_update.php">
					<input type="submit" value="update magazine">
				</form>	
				
				<form method="post" action ="magazine_delete.php">
					<input type="submit" value="delete magazine">
				</form>
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					<br>
					<img height='250' width='250' src='../images/si_mag.jpg'></img>
					<br>
					Sports Illustrated 
					</center>
				</a>
		
			</body>
		</html>
	_END;
?>