<?php
	echo <<<_END
		<html>
			<head>
				<title>Book Inventory</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="book_inventory_add.php">
					<input type="submit" value="add book">
				</form>	
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
				
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<div class="container">
			<div class="col-lg-6 col-md-6  col-sm-12">
				<center>
				<a href="book_details.php">
					<img height='150' width='150' src='../images/hp_book.jpg'></img>
				</a>
			</div>
		
			</body>
		</html>
	_END;
?>