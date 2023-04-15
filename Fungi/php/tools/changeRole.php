<?php

require_once("./connect.php");

$changeableName = mysqli_real_escape_string($conn, $_POST["changeableName"]);

// we think that he is a user first
$privilegeNew = "admin";

// whats his role?
$sql = "SELECT * FROM users WHERE name = '$changeableName'";
$users = mysqli_query($conn, $sql);

if ($users && mysqli_num_rows($users) > 0) {
    $user = mysqli_fetch_assoc($users);

    // if he is an admin already
    if($user["role"] === "admin")
    {
        $privilegeNew = "user";
    }
    
}

// changing his role
$stmt = $conn->prepare("UPDATE users SET role='$privilegeNew' WHERE name = ?");
$stmt->bind_param("s",$changeableName);

if($stmt->execute())
{
    $uzenet = "User " . $changeableName ."'s role changed to " . $privilegeNew .".";
    header("Location: ../home.php?uzenet=" . urlencode($uzenet));
}
else{
    
    $uzenet = "User " . $changeableName ."'s role " . $privilegeNew ." failed to be set.";
    header("Location: ../home.php?uzenet=" . urlencode($uzenet));
}