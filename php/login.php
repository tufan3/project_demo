<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php
    include "link.php";
    ?>
</head>

<body>

    <div class="mx-auto w-50 border border-info-subtle shadow rounded p-5 m-5">
        <form action="loginProcess.php" method="post">

            <!-- design part -->
            <h1 class="text-center mb-4 text-success">Login</h1>
            <div class="form-group mb-4">
                <input type="email" class="form-control border-bottom rounded-4" id="user_email" name="user_email" placeholder="name@example.com" required>
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control border-bottom rounded-4" id="user_password" name="user_password" placeholder="Enter your Password" required>
            </div>

            <button class="btn btn-primary mb-3 d-grid col-12 rounded-pill" type="submit" name="submit">Login</button>
            <p class="text-center">Not an account?<a style="text-decoration: none;" href="index.php?page=register">Register</a></p>
        </form>

    </div>


</body>

</html>