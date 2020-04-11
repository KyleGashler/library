<html>
			<head>
				<title>Movie Add</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
			<body>
				<form method='post' action='movie_inventory_add.php'>
			
				<center>
					Title: <input type='text' name='movieName'><br>
					Genre: <input type='text' name='genre'><br>
					Director: <input type='text' name='director'><br>
					Year Released: <input type='text' name='releaseYear'><br>
					Image Link: <input type='text' name='imageLink'><br>
					<input type='submit' value='Add Movie'>
				</center>
			
		</form>
	</body>
</html>

<?php
		require_once '../library_db_login.php';

session_start();
if (isset($_SESSION['username'])) {
    echo 'welcome ' . $_SESSION['username'];
} else {
    header("Location: ../login.php");
}

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['movieName'])) 
{

	$movieName = $_POST['movieName'];
	$genre = $_POST['genre'];
	$director = $_POST['director'];
	$releaseYear = $_POST['releaseYear'];
	$imageLink = $_POST['imageLink'];
	
	$query = "INSERT INTO movies (movieName, genre, director, releaseYear, imageLink) VALUES ('$movieName','$genre', '$director', '$releaseYear', '$imageLink')";
	
	
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: movie_inventory.php");
	
	
}

$conn->close();
?>