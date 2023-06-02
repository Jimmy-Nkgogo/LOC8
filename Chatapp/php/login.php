<?php
    session_start();
    include("config.php");
    $email = trim($_POST['email']);
    $email = strtolower($email);
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    if (!empty($email) && !empty($password)) {
        // checking if the email exists in the database
        $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '{$email}'");

        if (mysqli_num_rows($sql) > 0) { // if user exists
            $row = mysqli_fetch_assoc($sql);
            $hashedPassword = $row['password']; // retrieve the hashed password from the database
            
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['unique_id'] = $row['unique_id']; // using this session we use the unique_id in other php file
                echo "success";
            } else {
                echo "Email and Password do not match!";
            }
        } else {
            echo "Email does not exist!";
        }
    } else {
        echo "All input fields are required!";
    }
?>