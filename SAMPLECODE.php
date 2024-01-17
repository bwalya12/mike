<?php 
// Check if the username exists
$conn = "ggg";
    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
    
    $result = mysqli_query($conn, $checkUsernameQuery);



    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Password is correct, create a session for the logged-in user
            $_SESSION['username'] = $username;

            // Redirect to the home page (index.php) after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "User not found. Please register.";
    }
