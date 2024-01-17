<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['msg'])) : ?>
        <h2>Home Page</h2>
        <p> <?php echo $_SESSION['msg'] . " : " . $_SESSION['username']; ?></p>

        <hr>
        <a href='logout.php'>logout</a>
    <?php else : ?>
        <p>You are not logged in</p>
        <a href='index.php'>Register here</a>

    <?php endif; ?>
</body>

</html>