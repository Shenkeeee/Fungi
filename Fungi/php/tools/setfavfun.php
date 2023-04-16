<?php

require_once("./connect.php");
session_start();

// we think that he is a user first
$name = $_SESSION["user"];
$public_new = True;

// whats his role?
$sql = "SELECT * FROM users WHERE name = '$name'";
$users = mysqli_query($conn, $sql);

if ($users && mysqli_num_rows($users) > 0) {
    $user = mysqli_fetch_assoc($users);

    
    echo $user["public_favfun"];

    // if he is an admin already
    if($user["public_favfun"] == 1)
    {
        $public_new = 0;
    }

    if($user["public_favfun"] == 0)
    {
        $public_new = 1;
    }


}
    
    


// changing his role
$stmt = $conn->prepare("UPDATE users SET public_favfun=$public_new WHERE name = ?");
$stmt->bind_param("s",$name);

if($stmt->execute()){
    //redirect back to profile page
    header("Location: ../Profile.php");
    exit;

}else{
    echo "Error setting privacy";
}

