<?php

$conn = mysqli_connect("localhost", "root", "", "todolist");

if (!$conn) {

    die("Connection failed");
}
