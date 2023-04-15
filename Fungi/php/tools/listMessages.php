<?php

if(!isset($_SESSION["user"]))
{
    session_start();
}

require_once("./connect.php");

$sql = "SELECT * from chat";
$messagesData = mysqli_query($conn,$sql);

$messages = [];

$i = 0;

while($row = mysqli_fetch_array($messagesData))
{
    $messages[$i] = "" . $row["sender"] . ":" . $row["message"]; 
    echo $messages[$i] .   "    ";
    $i++;
}