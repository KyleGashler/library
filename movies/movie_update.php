<html>
			<head>
				<title>Movie Update</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
			</body>
</html>

<?php
	require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['update'])){
	
	$movieid = $_POST['movieid'];
	
	$query = "SELECT * FROM movies where movieid=$movieid ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<center>
	<pre>
	<form method='post' action='movie_update.php'>
		Title: <input type='text' name='movieName' value='$row[1]'>
		Genre: <input type='text' name='genre' value='$row[2]'>
		Director: <input type='text' name='director' value='$row[3]'>
		Year Released: <input type='text' name='releaseYear' value='$row[4]'>
		Image Link: <input type='text' name='imageLink' value='$row[5]'>
		<input type='hidden' name='movieid' value='$row[0]'>
		<input type='hidden' name='update2' value='yes'>
		<input type='submit'>
	</form>	
	</pre>
	</center>
	
_END;
	
	}
}

if(isset($_POST['update2'])){
	
	$movieid = $_POST['movieid'];
	$movieName = $_POST['movieName'];
	$genre = $_POST['genre'];
	$director = $_POST['director'];
	$releaseYear = $_POST['releaseYear'];
	$imageLink = $_POST['imageLink'];
	
	$query = "UPDATE movies set movieName='$movieName', genre='$genre', director='$director', releaseYear='$releaseYear', imageLink='$imageLink' where movieid=$movieid ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	header("Location: movie_inventory.php");
	
	
}

$conn->close();
?>