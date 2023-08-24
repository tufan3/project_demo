<?php
ob_start();
require '../database/connect.php';

$query = "SELECT user_id, user_name, user_password FROM `todolist`.`users`";
$result = $conn->query($query);

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM `todolist`.`users` WHERE user_id = '$deleteId'";
    $results = mysqli_query($conn, $deleteQuery);
    if ($results) {
        echo "<script>
            window.location.href='index.php?page=dashboard';
            </script>";
    }
}