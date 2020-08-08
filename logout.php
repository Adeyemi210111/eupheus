<?php


if(isset($_COOKIE[session_name()])){
    //empty  the cookie
    setcookie(session_name(), '', time()-86400, '/');
}

//clear all session variables
session_unset();
//destroy the session
session_destroy();
echo "you've been logged out!.";


echo "please kindly <a href='login.php'>login</a>";
?>