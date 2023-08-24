<?php
require_once '../database/connect.php';

$sql = "SELECT * FROM users";
$results = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($results)) {

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
        <td><a class="btn btn-warning" href="index.php?page=update&user_id=<?php echo $row['user_id']; ?>">Update</a></td>
        <td><a class="btn btn-warning" href="index.php?page=delete&delete_id=<?php echo $row['user_id']; ?>">Delete</a></td>

    </tr>
    <?php
}

?>