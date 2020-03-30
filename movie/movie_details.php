<?php
	echo <<<_END
		<html>
			<head>
				<title>Movie Details</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="movie_update.php">
					<input type="submit" value="Update Movie">
				</form>	
				
				<form method="post" action ="movie_delete.php">
					<input type="submit" value="Delete Movie">
				</form>
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					<br>
					<img height='325' width='250' src='../images/jurassic_park.jpg'></img>
					<br>
					Jurassic Park
					<br>
					Director: Steven Spielberg
					</center>
				</a>
		
			</body>
		</html>
	_END;
?>