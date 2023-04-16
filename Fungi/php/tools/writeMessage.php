<?php

require_once "./connect.php";

if(!isset($_SESSION["user"]))
{
    session_start();
}

$message = mysqli_real_escape_string($conn, $_POST["message"]);
$userTo = "Everyone";
$userTo = mysqli_real_escape_string($conn, $_POST["userTo"]);
$user = $_SESSION["user"];

    $stmt = mysqli_prepare($conn,"INSERT INTO chat(sender, message, receiver) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss",$user,$message,$userTo);        

$stmt->execute();

header("Location: ../Chat.php?userTo=".urlencode($userTo));
