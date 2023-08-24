<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

</head>

<body>
    <div class="mx-auto w-50 border border-info-subtle rounded-2 shadow p-5 m-5">
        <form action="" method="post">
            <?php
            include "registerProcess.php";
            ?>

            <!-- design part -->
            <h1 class="text-center mb-4 text-success">Register</h1>
            <div class="form-group mb-4">
                <input type="text" class="form-control border-bottom rounded-4" id=" user_name" name="user_name" placeholder="Enter Your User Name">
                <!-- <p id="usernameError" class="error"></p> -->

            </div>

            <div class="form-group mb-4">
                <input type="email" class="form-control border-bottom rounded-4" id="user_email" name="user_email" placeholder="name@example.com">
                <!-- <p id="emailError" class="error"></p> -->
            </div>

            <div class="form-group mb-4">
                <input type="password" class="form-control border-bottom rounded-4" id="user_password" name="user_password" placeholder="Enter your Password">
                <!-- <p id="passwordError" class="error"></p> -->
            </div>

            <div class="form-group mb-4">
                <input type="password" class="form-control border-bottom rounded-4" id="confirm_password" name="confirm_password" placeholder="Enter your confirm Password">
                <!-- <p id="confirmPasswordError" class="error"></p> -->
            </div>

            <button class="btn btn-primary mb-3 d-grid col-12 rounded-pill" type="submit" name="submit">Register</button>
            <p class="text-center">Not an account?<a style="text-decoration: none;" href="index.php?page=login">Login</a></p>
        </form>

    </div>


</body>

</html>