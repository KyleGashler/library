<?php
echo <<<_END
	<html>
		<head>
			<title>Library Home</title>
			<link rel='stylesheet' href='styles.css'>
		</head>
		<body>
		
			<form method="post" action ="user_add.php">
				<input type="submit" value="add new user">
			</form>	
		
			<a>
				<br>
				<center>
				<img height='100' width='200' src='images/library_logo.jpg'></img>
				</center>
				<br>
				<br>
			</a>
					
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<div class="container">
				<div class="col-lg-6 col-md-6  col-sm-12">
					<center>
					<a href="book_inventory.php">
						<img height='150' width='150' src='images/book_inventory.jpg'></img>
					</a>
						<br> 
						Book List 
					<br>
					<br>
					<a href="movie_inventory.php">
						<img height='150' width='150' src='images/movie_inventory.jpg'></img>
					</a>
						<br>
						Movie List
					<br>
					<br>
					<a href="magazine_inventory.php">
						<img height='150' width='150' src='images/magazine_inventory.png'></img>
					</a>
						<br>
						Magazine List
					</center>
			</div>
				<div class="col-lg-6 col-md-6  col-sm-12">
					<center>
					<a href="music_inventory.php">
						<img height='150' width='150' src='images/music_inventory.jpg'></img>
					</a>
						<br>
						Music List
					<br>
					<br>
					<a href="internet_access.php">
						<img height='150' width='150' src='images/internet_access.png'></img>
					</a>
						<br>
						Internet Access
					<br>
					<br>
					<a href="class_search.php">
						<img height='150' width='150' src='images/community_class_search.jpg'></img>
					</a>
						<br>
						Community Classes
					</center>
				</div
				<div>
		</body>
	</html>
_END;
?>