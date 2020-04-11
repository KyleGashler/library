<html>
			<head>
				<title>Music Add</title>
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
				<form method='post' action='music_inventory_add.php'>
			
				<center>
					Artist: <input type='text' name='artistName'><br>
					Album: <input type='text' name='albumName'><br>
					Genre: <input type='text' name='genre'><br>
					Year Released: <input type='text' name='releaseYear'><br>
					Image Link: <input type='text' name='imageLink'><br>
					<input type='submit' value='Add Music'>
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


if(isset($_POST['artistName'])) 
{

	$artistName = $_POST['artistName'];
	$albumName = $_POST['albumName'];
	$genre = $_POST['genre'];
	$releaseYear = $_POST['releaseYear'];
	$imageLink = $_POST['imageLink'];
	
	$query = "INSERT INTO music (artistName, albumName, genre, releaseYear, imageLink) VALUES ('$artistName','$albumName', '$genre', '$releaseYear', '$imageLink')";
	
	
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: music_inventory.php");
	
	
}

$conn->close();
?>