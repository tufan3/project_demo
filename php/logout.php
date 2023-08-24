<?php
session_start();
session_destroy();
header("lacation: index.php?page=logout");
?>