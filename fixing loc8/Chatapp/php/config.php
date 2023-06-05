<?php
    $conn = mysqli_connect("localhost", "root","","LOC8");
    if (!$conn) {
        die("Database connection failed: ". mysqli_connect_error());
    } 
?>