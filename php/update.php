<?php
require_once '../database/connect.php';

if (isset($_GET['update_id'])) {
    $update_id = $_GET['update_id'];

    $sql = "SELECT * FROM `todolist`.`users` WHERE user_id = '$update_id'";
    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($results);
}

if (isset($_POST['submit'])) {


    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];

    $sql = "UPDATE `users` SET 'user_name'='$user_name', 'user_email'='$user_email' WHERE user_id = '$update_id'";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        echo "<script>
                            window.location.href='index.php?page=dashboard';
                            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

</head>

<body>
    <div class="mx-auto w-50 border border-info-subtle rounded-2 shadow p-5 m-5">
        <form action="" method="post">

            <!-- design part -->
            <h1 class="text-center mb-4 text-success">Update</h1>
            <div class="form-group mb-4">
                <input type="text" class="form-control border-bottom rounded-4" id=" user_name" name="user_name"
                    placeholder="Enter Your User Name" value="<?php echo $row['user_name']; ?>">
                <!-- <p id="usernameError" class="error"></p> -->
            </div>

            <div class="form-group mb-4">
                <input type="email" class="form-control border-bottom rounded-4" id="user_email" name="user_email"
                    placeholder="name@example.com" value="<?php echo $row['user_email']; ?>">
                <!-- <p id="emailError" class="error"></p> -->
            </div>

            <button class="btn btn-primary mb-3 d-grid col-12 rounded-pill" type="submit" name="submit">Update</button>
        </form>

    </div>


</body>

</html>