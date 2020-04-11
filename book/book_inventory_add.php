<html>
    <head>
        <title>Book Add</title>
        <link rel='stylesheet' href='../styles.css'>
    </head>
        <a>
            <br>
            <center>
            <img height='100' width='200' src='../images/library_logo.jpg'></img>
            <br>
            </center>
        </a>
    <body>
        <form method='post' action='book_inventory_add.php'>
        <center>
            Title: <input type='text' name='bookName'><br>
            Author: <input type='text' name='author'><br>
            Genre: <input type='text' name='genre'><br>
            Year Published: <input type='text' name='publishYear'><br>
            Image Link: <input type='text' name='imageLink'><br>
            <input type='submit' value='Add Book'>
        </center>
        </form>
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

    if(isset($_POST['bookName']))
    {
        $bookName = $_POST['bookName'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $publishYear = $_POST['publishYear'];
        $imageLink = $_POST['imageLink'];

        $query = "INSERT INTO books (bookName, author, genre, publishYear, imageLink) VALUES ('$bookName','$author', '$genre', '$publishYear', '$imageLink')";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: book_inventory.php");
    }
    $conn->close();
?>