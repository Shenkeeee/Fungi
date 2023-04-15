<?php

require_once "./connect.php";

$deletableName = mysqli_real_escape_string($conn, $_POST["deletableName"]);
$deletableNameSelf = mysqli_real_escape_string($conn, $_POST["deletableNameSelf"]);

$stmt = $conn->prepare("DELETE FROM users WHERE name = ?");
$stmt->bind_param("s",$deletableName);

if($stmt->execute())
{
    // if we are deleting our profile, we sign out
    if($deletableNameSelf === $deletableName)
    {
        session_start();
        session_unset();
        session_destroy();        
    }
    $uzenet = "User " . $deletableName . " was deleted. ";        
    header("Location: ../home.php?uzenet=" . urlencode($uzenet));
}
else{
    $uzenet = "Error deleting user $deletableName.";
    header("Location: ../home.php?uzenet=" . urlencode($uzenet));
}
?>