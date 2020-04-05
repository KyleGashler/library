<?php
require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete'])){
	
	$musicid = $_POST['musicid'];
	$query = "DELETE from music where musicid='$musicid' ";
	
	$result = $conn ->query($query);
	if(!$result) die($conn->error);
	
	header("Location: music_inventory.php");

}

$conn->close();
?>