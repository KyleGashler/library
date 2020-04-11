<html>
    <head>
        <title>Book Update</title>
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
        <br>
        <br>
        <a href="../logout.php">Logout</a>
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

    if(isset($_POST['update'])){

        $bookid = $_POST['bookid'];

        $query = "SELECT * FROM books where bookid=$bookid ";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        $rows = $result->num_rows;

        for($j=0; $j<$rows; ++$j){
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_NUM);

            echo <<<_END
                <center>
                    <pre>
                        <form method='post' action='book_update.php'>
                            Title: <input type='text' name='bookName' value='$row[1]'>
                            Author: <input type='text' name='author' value='$row[2]'>
                            Genre: <input type='text' name='genre' value='$row[3]'>
                            Year Published: <input type='text' name='publishYear' value='$row[4]'>
                            Image Link: <input type='text' name='imageLink' value='$row[5]'>
                            <input type='hidden' name='bookid' value='$row[0]'>
                            <input type='hidden' name='update2' value='yes'>
                            <input type='submit'>
                        </form>	
                    </pre>
                </center>
            _END;
        }
    }

    if(isset($_POST['update2'])){

        $bookid = $_POST['bookid'];
        $bookName = $_POST['bookName'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $publishYear = $_POST['publishYear'];
        $imageLink = $_POST['imageLink'];

        $query = "UPDATE books set bookName='$bookName', author='$author', genre='$genre', publishYear='$publishYear', imageLink='$imageLink' where bookid=$bookid ";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: book_inventory.php");
    }

    $conn->close();
?>