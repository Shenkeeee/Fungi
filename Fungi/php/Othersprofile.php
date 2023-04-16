
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/profile.css">

    <link rel="icon" href="./img/icon.png">
</head>
<body>
<div class="main">

    <?php

    $page = "";
    include_once "./tools/navbar.php";
    
    //sql betölt 

        require_once("./tools/connect.php");

        $sql = "SELECT * FROM users";
        $users = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
        {
            if($row["name"] === $_POST["changeableName"])
            {
                $name = $row["name"];
                $email = $row["email"];
                $role = $row["role"];
                $img = $row["profile_picture"];

        }
        }
    ?>







    <div class="content">
        <div class="container">

            <header><h1><span><?php echo "$name"?>'s Profile: </span></h1></header>
            <main>
            <img src="../img/profilePictures/<?php echo "$img" ?>" alt="Profile_Picture" width="200" height="150">
            <h2>Name: <?php echo "$name"?></h2>
            <h2>Email: <?php echo "$email"?> </h2>
            <h2>Role: <?php echo "$role"?> </h2>
            
        
        













            
        </main>







    </div>
    </div>
</div>


</body>
</html>