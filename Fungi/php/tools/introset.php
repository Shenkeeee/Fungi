<?php

require_once("./connect.php");
session_start();

// we think that he is a user first
$name = $_SESSION["user"];
$new_intro = $_POST["intro"];


// changing his role
$stmt = $conn->prepare("UPDATE users SET intro=? WHERE name = ?");
$stmt->bind_param("ss", $new_intro, $name);

if($stmt->execute()){
    //redirect back to profile page
    header("Location: ../Profile.php");
    exit;

} else{
    echo "Error setting intro";
}