<?php
require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete'])){
	
	$magazineid = $_POST['magazineid'];
	$query = "DELETE from magazines where magazineid='$magazineid' ";
	
	$result = $conn ->query($query);
	if(!$result) die($conn->error);
	
	header("Location: magazine_inventory.php");

}

$conn->close();
?>