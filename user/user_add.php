<?php
require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username']))
{

    $userName = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO USERS (userName, userPassWord) VALUES ('$userName','$password')";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: ../book/book_inventory.php");

}

$conn->close();
?>

