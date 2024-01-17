<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/assets/bootstrap/js/bootstrap.min.js">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>

<body style="background-color: whitesmoke;">

    <div class="container pt-5" style="width:50%;">
        <h2 style="text-align: center;" class=" ">User Login</h2>
        <br> <br>

        <form action="register.php" method="post">

            <input type="text" name="username" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Username" autofocus='on' class="shadow-lg p-3 mb-5 bg-white rounded"><br>



            <input type="password" name="password" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Enter Password" autofocus='on' ><br>


            <div class="text-center">
                <input type="submit" value="submit" name="login" class="btn btn-primary bg-dark text-white">

            </div>
        </form>

        <p style="text-align:center;">Not Registered ? <a href="index.php" style="text-decoration: none;">Sign up</a></p>


    </div>
</body>

</html>