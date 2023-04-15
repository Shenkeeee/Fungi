<?php

require_once "./connect.php";

if(!isset($_SESSION["user"]))
{
    session_start();
}

$message = mysqli_real_escape_string($conn, $_POST["message"]);
$user = $_SESSION["user"];

$stmt = mysqli_prepare($conn,"INSERT INTO chat(sender, message) VALUES (?, ?)");

mysqli_stmt_bind_param($stmt, "ss",$user,$message);

$stmt->execute();

// $uzenet = $message . " was sent by " . $user;
// header("Location: ../Home.php?uzenet=" . urlencode($uzenet));

header("Location: ../Chat.php");
