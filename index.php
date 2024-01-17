<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/assets/bootstrap/js/bootstrap.min.js">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>

<body style="background-color:whitesmoke;">


    <div class="container pt-5" style="width:50%;">
        <h2 style="text-align: center;padding:15px;">User Registration</h2>



        <form action="register.php" method="post">


            <input type="text" autofocus='on' name="username" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Name"><br>


            <input type="email" name="email" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Email"><br>


            <input type="text" name="schoolName" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="School Name"><br>


            <input type="password" name="password" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Password"><br>


            <input type="password" name="confirm_password" required class="form-control shadow p-3 mb-5 bg-white rounded" placeholder="Repeat Password">
            <div style="text-align: center;">
                <input type="submit" name="register" class="btn btn-primary bg-dark text-white shadow p-3 mb-5 rounded">

            </div>
        </form>
        <p style="text-align: center;">Already registered? <a href="login.php" style="text-decoration:none;">Login</a></p>
    </div>
</body>

</html>