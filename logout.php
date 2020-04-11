<?php

    session_start(); //this must be used every time you want to use the session. Even to end it.

    if(isset($_SESSION['username'])) {
        setCookie(session_name(), '', time()-2592000, '/');
        session_destroy();

        echo "user susccessfully logged out";
    }
    echo <<<_END
        <a href="./login.php">
           <img height='100' width='200' src='./images/library_logo.jpg'>
        </a>
        _END;

?>