<?php
require_once '../database/connect.php';
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_password'];
    // $md5Password = md5($user_password);

    $errors = array();


    // Basic validation
    if (empty($user_name)) {
        $errors[] = "Username is required.";
    }

    if (($user_email) == '') {
        $errors[] = "Email is required.";
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($user_password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($user_password) < 6) {
        $errors[] = "Password must be 6 digit longer.";
    }

    if ($user_password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }


    if (empty($errors)) {
        $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password')";
        $results = mysqli_query($conn, $sql);
        if ($results) {
            echo "<script>
            window.location.href='index.php?page=login';
            </script>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}