<?php
echo <<<_END
	<html>
		<head>
			<title>Library Home</title>
			<link rel='stylesheet' href='./styles.css'>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			<div class="container">
				<div class="col-lg-6 col-md-6  col-sm-12">
					<center>
						<a href="./book/book_inventory.php">
							<img height='150' width='150' src='./images/book_inventory.jpg'></img>
						</a>
						<br> 
						Book List 
						<br>
						<br>
						<a href="./movie/movie_inventory.php">
							<img height='150' width='150' src='./images/movie_inventory.jpg'></img>
						</a>
						<br>
						Movie List
						<br>
					</center>
				</div>
				<div class="col-lg-6 col-md-6  col-sm-12">
					<center>
						<a href="./magazine/magazine_inventory.php">
							<img height='150' width='150' src='./images/magazine_inventory.png'></img>
						</a>
						<br>
						Magazine List
						</br>
						<a href="./music/music_inventory.php">
							<img height='150' width='150' src='./images/music_inventory.jpg'></img>
						</a>
						<br>
						Music List
					</center>
				</div>
				<br>
			</div>
		</body>
	</html>
_END;
?>