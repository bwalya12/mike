<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/assets/bootstrap/js/bootstrap.min.js">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Logic</title>
</head>

<body>
    <?php
    session_start();
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        echo "Connection failed";
    }
    //CRATE DATABASE CALLED register
    //$sql = "CREATE DATABASE register";
    //if (!mysqli_query($conn, $sql)) {
    ///echo "Database was not created!" . mysqli_connect_error($conn);
    //}

    // CREATE TABLE users
    /*
$sql = "CREATE TABLE users(

id int(11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR (255) NOT NULL,
email VARCHAR (255) NOT NULL,
schoolName VARCHAR (255) NOT NULL,
password VARCHAR (255) NOT NULL,
register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table was created";
} else {
    echo "Failed to create table " . mysqli_error($conn);
}
*/


    if (isset($_POST['register'])) {
        // Retrieve user input from the registration form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $schoolName = $_POST['schoolName'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Checking for errors

        if (empty($username)) {
            echo "Username is empty";
        }
        if (empty($email)) {
            echo "Email is empty";
        }
        if (empty($schoolName)) {
            echo "School name is empty";
        }
        if (empty($password)) {
            echo "Password is empty";
        }
        if (empty($confirm_password)) {
            echo "Confirm password is empty";
        }

        // Check if passwords match
        if ($password != $confirm_password) {
            echo "<div class='container-fluide p-2 mt-2 btn btn-danger'>Passwords do not match</div>";
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // CHECK if user exists

            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email) {
                    echo "This email is taken by {$row['username']}";
                    exit();
                }
            } else {
                // SQL query to insert user details into the database
                $sql = "INSERT INTO users (username, email, schoolName, password) VALUES ('$username', '$email', '$schoolName', '$hashed_password')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    // Create a session for the registered user
                    $_SESSION['username'] = $username;
                    $_SESSION['msg'] = "You are registered";

                    // Redirect to a welcome page or any other page you'd like
                    header("Location: login.php");
                    exit();
                }
            }
        }
    }

    // LOGIN LOGIC
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // check for errors

        if (empty($username)) {
            echo "Username is empty";
        }
        if (empty($password)) {
            echo "password is empty";
        }

        // Hash the password

        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Pull the data from the database
        $sql = "SELECT * FROM users WHERE username = '$username' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                // Start the session
                $_SESSION['username'] = $username;
                $_SESSION['msg'] = "You are successfuly logged in";
                header("Location:welcome.php");
            } else {
                echo "<div class='container-fluid p-2 mt-2 btn btn-danger'>This password is not verified</div>";
            }
        } else {
            echo "<div class='container-fluid p-2 mt-2 btn btn-danger'>Either username or password was wrongly entered!</div>";
        }
    }
    ?>

</body>

</html>