<?php
require_once '../library_db_login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username'])){

    $userName = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $query = "SELECT * FROM users WHERE userName = '$userName'";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;

    $passwordMatch = false;

    for($j=0; $j<$rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($password == $row['userPassWord']) $passwordMatch = true;

    }

    if($passwordMatch == true ){
        // start session
        session_start();//this must be called anywhere you want to use a session
        $_SESSION['username'] = $userName;

        header('Location: ../home.php');
    }
    else{
        echo 'no match';
    }
} else{
    echo 'username not posted';
}

?>

