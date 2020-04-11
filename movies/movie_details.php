<html>
			<head>
				<title>Movie Details</title>
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

session_start();
if (isset($_SESSION['username'])) {
    echo 'welcome ' . $_SESSION['username'];
} else {
    header("Location: ../login.php");
}

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['movieid'])){
	
	$movieid = $_POST['movieid'];
	$query = "SELECT * FROM movies WHERE movieid = '$movieid'";
		
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}
	
$rows = $result->num_rows;

for($j=0; $j<$rows; ++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<center>
	<pre>
	<img height='150' width='150' src='$row[5]'></img>
	<br>
	Title: $row[1]
	Genre: $row[2]
	Director: $row[3]
	Year Released: $row[4]
	
	</pre>
	</center>
	
	<center>
		<form method="post" action ="movie_update.php">
			<input type='hidden' name = 'update' value = 'yes'>
			<input type ='hidden' name ='movieid' value='$row[0]'>
			<input type="submit" value="update movie">
		</form>	
	
		<form method="post" action ="movie_delete.php">
			<input type='hidden' name = 'delete' value = 'yes'>
			<input type ='hidden' name ='movieid' value='$row[0]'>
			<input type="submit" value="delete movie">
		</form>
	
	</center>
		<br>
	<br>
	<a href="../logout.php">Logout</a>
	
_END;

}

$conn->close();
?>