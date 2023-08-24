<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include "link.php";
    ?>
</head>

<body class="bg-secondary bg-opacity-25 bodyinfo">
    <?php
    include "header.php";
    ?>

    <div class="row m-2">
        <div class="col-3 bg-info bg-opacity-25">
            <?php
            include "leftSideBar.php";
            ?>
        </div>
        <div class="col-9 bg-body-tertiary">
            <?php
            include "body.php";
            // include "home.php";
            // include "about.php";
            // include "about.php";
            // include "contact.php";
            // include "login.php";
            // include "register.php";
            ?>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>