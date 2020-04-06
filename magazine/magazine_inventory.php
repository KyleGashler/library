<html>
			<head>
				<title>Magazine Inventory</title>
				<link rel='stylesheet' href='../styles.css'>
			</head>
			<body>
			
				<form method="post" action ="magazine_inventory_add.php">
					<input type="submit" value="add magazine">
				</form>	
		
				<a>
					<br>
					<center>
					<img height='100' width='200' src='..//images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
			</body>
</html>

<?php
	require_once '../library_db_login.php';

				$conn = new mysqli($hn, $un, $pw, $db);
				if($conn->connect_error) die($conn->connect_error);

				$query = "SELECT * FROM magazines";
	
				$result = $conn->query($query);
				if(!$result) die($conn->error);
	
				$rows = $result->num_rows;

				for($j=0; $j<$rows; ++$j){
					$result->data_seek($j);
					$row = $result->fetch_array(MYSQLI_NUM);
echo <<<_END
	
			
				
				<pre>
	
				<form method="post" action ="magazine_details.php">
					<input type ='hidden' name ='magazineid' value='$row[0]'>
					Title: <input type='submit' value='$row[1]'>
					<img height='150' width='150' src='$row[6]'></img>
				</form>
						
				</pre>
				
			
		
			
_END;
				}
?>