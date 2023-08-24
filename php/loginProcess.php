
<?php
// session_start();
require_once '../database/connect.php';
if (isset($_POST['submit'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $results = mysqli_query($conn, $sql);
    if ($results) {

        // $_SESSION['user_email'] = $user_email;
        // $_SESSION['status'] = 'ok';

        header("location:index.php?page=dashboard");
    } else {
        header("location:index.php?page=login");
    }
}
?>