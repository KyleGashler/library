<?php
require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete'])){
	
	$bookid = $_POST['bookid'];
	$query = "DELETE from books where bookid='$bookid' ";
	
	$result = $conn ->query($query);
	if(!$result) die($conn->error);
	
	header("Location: book_inventory.php");

}

$conn->close();
?>