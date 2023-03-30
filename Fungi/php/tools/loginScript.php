<?php
session_start();

$name = $_POST["name"];
$pass = $_POST["password"];

$uzenet = "";

if(!isset($name) || !isset($password))
{
    $uzenet = "Please fill your data!";
    header("location: ../Login.php?uzenet=" . urlencode($uzenet) );
}

//ha nem egyezik
//TODO

//login
$_SESSION["user"] = "xd";
header("location: ../Home.php");