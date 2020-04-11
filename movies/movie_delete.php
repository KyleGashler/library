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


if(isset($_POST['delete'])){
	
	$movieid = $_POST['movieid'];
	$query = "DELETE from movies where movieid='$movieid' ";
	
	$result = $conn ->query($query);
	if(!$result) die($conn->error);
	
	header("Location: movie_inventory.php");

}

$conn->close();
?>