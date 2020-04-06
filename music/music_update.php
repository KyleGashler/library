<html>
			<head>
				<title>Music Update</title>
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
	
	$musicid = $_POST['musicid'];
	
	$query = "SELECT * FROM music where musicid=$musicid ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<center>
	<pre>
	<form method='post' action='music_update.php'>
		Artist: <input type='text' name='artistName' value='$row[1]'>
		Album: <input type='text' name='albumName' value='$row[2]'>
		Genre: <input type='text' name='genre' value='$row[3]'>
		Year Released: <input type='text' name='releaseYear' value='$row[4]'>
		Image Link: <input type='text' name='imageLink' value='$row[5]'>
		<input type='hidden' name='musicid' value='$row[0]'>
		<input type='hidden' name='update2' value='yes'>
		<input type='submit'>
	</form>	
	</pre>
	</center>
	
_END;
	
	}
}

if(isset($_POST['update2'])){
	
	$musicid = $_POST['musicid'];
	$artistName = $_POST['artistName'];
	$albumName = $_POST['albumName'];
	$genre = $_POST['genre'];
	$releaseYear = $_POST['releaseYear'];
	$imageLink = $_POST['imageLink'];
	
	$query = "UPDATE music set artistName='$artistName', albumName='$albumName', genre='$genre', releaseYear='$releaseYear', imageLink='$imageLink' where musicid=$musicid ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	header("Location: music_inventory.php");
	
	
}

$conn->close();
?>