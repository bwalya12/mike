<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'] . "<br>";
        echo "Your are welcome: " . $_SESSION['username']."<br>";
        echo " <a href='login.php'>login now </a>";
    }
} else {

    header("Location:login.php");
}
