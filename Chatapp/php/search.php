<?php 
    include_once("config.php");
    $word = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE first_name LIKE '%{$word}%' OR last_name LIKE '%{$word}%'");
    if (mysqli_num_rows($sql) > 0) {
        include_once("data.php");
    } else {
        $output .= "No user found related to " .$word;
    }

    echo $output;
?>