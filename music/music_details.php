<html>
			<head>
				<title>Music Details</title>
				<link rel='stylesheet' href='../../../Downloads/updated_library/styles.css'>
			</head>
			<body>
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../../../Downloads/updated_library/images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
			</body>
</html>

<?php
	require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['musicid'])){
	
	$musicid = $_POST['musicid'];
	$query = "SELECT * FROM music WHERE musicid = '$musicid'";
		
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
	Artist: $row[1]
	Album: $row[2]
	Genre: $row[3]
	Year Released: $row[4]
	
	</pre>
	</center>
	
	<center>
		<form method="post" action ="music_update.php">
			<input type='hidden' name = 'update' value = 'yes'>
			<input type ='hidden' name ='musicid' value='$row[0]'>
			<input type="submit" value="update music">
		</form>	
	
		<form method="post" action ="music_delete.php">
			<input type='hidden' name = 'delete' value = 'yes'>
			<input type ='hidden' name ='musicid' value='$row[0]'>
			<input type="submit" value="delete music">
		</form>
	
	</center>
	
	
_END;

}

$conn->close();
?>