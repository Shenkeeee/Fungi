<?php
session_start();

require_once("./connect.php");

$name = $_POST["name"];
$pass = $_POST["password"];

$uzenet = "";

if(!isset($name) || !isset($pass))
{
    $uzenet = "Please fill your data!";
    header("location: ../Login.php?uzenet=" . urlencode($uzenet) );
}


$sql = "SELECT * FROM users";
$users = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
{
    if($row["name"] === $name)
    {
        // we also check the unhashed cuz of first regs
        if(password_verify($pass,$row["password"]) || $row["password"] === $pass )
        {
            $_SESSION["user"] = "$name";
            $_SESSION["role"] = $row["role"];
            header("location: ../Home.php");    
        }
        else
        {
            if($uzenet=== "")
            {
                $uzenet = "Incorrect password.";
                header("location: ../Login.php?uzenet=".urlencode($uzenet));
            }
        }
        
    }
}
if($uzenet=== "" &&  !$_SESSION["user"])
{
    $uzenet = "Incorrect username.";
    header("location: ../Login.php?uzenet=".urlencode($uzenet));
}
echo $uzenet;