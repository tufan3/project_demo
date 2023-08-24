<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>

<body>

    <!-- main part -->
    <h1 class="text-center mt-4">Dashboard</h1>
    <div class="mx-auto w-100 border border-info-subtle shadow rounded p-5 m-5">
        <form action="" method="post">
            <h2 class="text-center">Fetch Data From Database</h2>
            <table class="table table-hover table-bordered table-striped text-center">
                <tr class="">
                    <td>User ID</td>
                    <td>User Name</td>
                    <td>Email</td>
                    <td colspan="2">Action</td>
                </tr>
                <tr>

                    <?php
                    require("dashboardProcess.php");
                    ?>

                </tr>
            </table>
        </form>

    </div>

</body>

</html>