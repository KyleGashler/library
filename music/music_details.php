<?php
	echo <<<_END
		<html>
			<head>
				<title>Musis Details</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="music_update.php">
					<input type="submit" value="Update Music">
				</form>	
				
				<form method="post" action ="music_delete.php">
					<input type="submit" value="Delete Music">
				</form>
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					<br>
					<img height='250' width='250' src='../images/lucero_tennessee.jpg'></img>
					<br>
					Artist: Lucero
					<br>
					Album Title: Tennessee
					</center>
				</a>
		
			</body>
		</html>
	_END;
?>