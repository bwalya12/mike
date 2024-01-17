<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>

<?php 

session_start();

if($_SESSION['username']){

session_destroy();

unset($_SESSION['username']);

header("Location:index.php");
exit();
}else{
    header("Location:login.php");
}
?>
    
</body>
</html>