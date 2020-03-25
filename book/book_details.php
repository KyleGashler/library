<?php
	echo <<<_END
		<html>
			<head>
				<title>Book Details</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="book_update.php">
					<input type="submit" value="update book">
				</form>	
				
				<form method="post" action ="book_delete.php">
					<input type="submit" value="delete book">
				</form>
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					<br>
					<img height='250' width='250' src='../images/hp_book.jpg'></img>
					<br>
					Harry Potter and The Sorcerer's Stone 
					<br>
					Author: J.K. Rowling
					</center>
				</a>
		
			</body>
		</html>
	_END;
?>