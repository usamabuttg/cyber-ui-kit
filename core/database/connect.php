<?php 
$connect_error = 'Could not connect to database';

$conn = mysqli_connect('localhost', 'root', '', 'cyber_db');

if (!$conn) {
    die($connect_error);
}

mysqli_set_charset($conn, "utf8");
?>