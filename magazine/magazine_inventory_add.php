<html>
			<head>
				<title>Magazine Add</title>
				<link rel='stylesheet' href='../../../Downloads/updated_library/styles.css'>
			</head>
				<a>
					<br>
					<center>
					<img height='100' width='200' src='../../../Downloads/updated_library/images/library_logo.jpg'></img>
					<br>
					</center>
				</a>
			<body>
				<form method='post' action='magazine_inventory_add.php'>
			
				<center>
					Title: <input type='text' name='magazineName'><br>
					Topic: <input type='text' name='topic'><br>
					Publisher: <input type='text' name='publisher'><br>
					Year Published: <input type='text' name='publishYear'><br>
					Issue Number: <input type='text' name='issueNumber'><br>
					Image Link: <input type='text' name='imageLink'><br>
					<input type='submit' value='Add Magazine'>
				</center>
			
		</form>
	</body>
</html>

<?php
	require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['magazineName'])) 
{

	$magazineName = $_POST['magazineName'];
	$topic = $_POST['topic'];
	$publisher = $_POST['publisher'];
	$publishYear = $_POST['publishYear'];
	$issueNumber = $_POST['issueNumber'];
	$imageLink = $_POST['imageLink'];
	
	$query = "INSERT INTO magazines (magazineName, topic, publisher, publishYear, issueNumber, imageLink) VALUES ('$magazineName','$topic', '$publisher', '$publishYear', '$issueNumber', '$imageLink')";
	
	
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: magazine_inventory.php");
	
	
}

$conn->close();
?>