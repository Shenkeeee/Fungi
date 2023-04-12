<?php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "fungi";
$db_table = "users";

// create connection to the database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
