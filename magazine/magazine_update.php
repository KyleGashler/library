<html>
			<head>
				<title>Magazine Update</title>
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

        $magazineid = $_POST['magazineid'];

        $query = "SELECT * FROM magazines where magazineid=$magazineid ";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        $rows = $result->num_rows;

        for($j=0; $j<$rows; ++$j){
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_NUM);

        echo <<<_END
            <center>
                <pre>
                    <form method='post' action='magazine_update.php'>
                        Title: <input type='text' name='magazineName' value='$row[1]'>
                        Topic: <input type='text' name='topic' value='$row[2]'>
                        Publisher: <input type='text' name='publisher' value='$row[3]'>
                        Year Published: <input type='text' name='publishYear' value='$row[4]'>
                        Issue Number: <input type='text' name='issueNumber' value='$row[5]'>
                        Image Link: <input type='text' name='imageLink' value='$row[6]'>
                        <input type='hidden' name='magazineid' value='$row[0]'>
                        <input type='hidden' name='update2' value='yes'>
                        <input type='submit'>
                    </form>	
                </pre>
            </center>
        _END;
        }
    }

    if(isset($_POST['update2'])){

        $magazineid = $_POST['magazineid'];
        $magazineName = $_POST['magazineName'];
        $topic = $_POST['topic'];
        $publisher = $_POST['publisher'];
        $publishYear = $_POST['publishYear'];
        $issueNumber = $_POST['issueNumber'];
        $imageLink = $_POST['imageLink'];

        $query = "UPDATE magazines set magazineName='$magazineName', topic='$topic', publisher='$publisher', publishYear='$publishYear', issueNumber='$issueNumber', imageLink='$imageLink' where magazineid=$magazineid ";

        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: magazine_inventory.php");
    }
    $conn->close();
?>

