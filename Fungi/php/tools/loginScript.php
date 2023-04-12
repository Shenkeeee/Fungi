<?php
session_start();

require_once("./connect.php");

$name = $_POST["name"];
$pass = $_POST["password"];

$uzenet = "";

if(!isset($name) || !isset($password))
{
    $uzenet = "Please fill your data!";
    // header("location: ../Login.php?uzenet=" . urlencode($uzenet) );
}
// header("location: ./connect.php?uzenet=" . urlencode($uzenet) );


$sql = "SELECT * FROM users WHERE username='$name'";
$users = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
{
    if($row["name"] === $name)
    {
        $_SESSION["user"] = "$name";
        header("location: ../Home.php");
    }
}


echo "xd";