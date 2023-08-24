<?php
// session_start();
// echo $_SESSION['user_email'];
// if ($_SESSION['status'] != 'ok')
//     header('location: login.php');

require_once '../database/connect.php';
$sql = "SELECT * FROM users"; // Replace 'your_table' with your actual table name
$results = mysqli_query($conn, $sql);

// $num = mysqli_num_rows($result);
// $res = mysqli_fetch_array($result);
// echo $num;
// echo $res[1];

while ($row = mysqli_fetch_assoc($results)) {
    // foreach ($results as $result) {
    ?>

    <tr>
        <td>
            <?php echo $row['user_id'] ?>
        </td>
        <td>
            <?php echo $row['user_name'] ?>
        </td>
        <td>
            <?php echo $row['user_email'] ?>
        </td>
        <td><a class="btn btn-warning" href="index.php?page=update&update_id=<?php echo $row['user_id']; ?>">Update</a></td>
        <td><a class="btn btn-warning" href="index.php?page=delete&delete_id=<?php echo $row['user_id']; ?>">Delete</a></td>

    </tr>
    <?php
}

?>