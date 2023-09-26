<?php
session_start();
if(isset($_SESSION['username'])){
echo "Welcome ".$_SESSION['username'];
echo "<br>";
echo "And your password is ".$_SESSION['password'];
echo "<br>";
echo "And your email is ".$_SESSION['email'];
}

else{
    echo "Please log in again to continue";
}
?>
