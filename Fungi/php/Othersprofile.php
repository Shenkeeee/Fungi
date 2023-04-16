
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
                $img = $row["profile_picture"];
                $name = $row["name"];
                $email = $row["email"];
                $public_email = $row["public_email"];
                $role = $row["role"];
                $intro = $row["intro"];
                $public_intro = $row["public_intro"];
                $favfun = $row["favfun"];
                $public_favfun = $row["public_favfun"];

        }
        }
    ?>







    <div class="content">
        <div class="container">

            <header><h1><span><?php echo "$name"?>'s Profile: </span></h1></header>
            <main>
            <img src="../img/profilePictures/<?php echo "$img" ?>" alt="Profile_Picture" width="200" height="200">
            <h2>Name: <?php echo "$name"?></h2>



            <?php if ($public_email == True){ ?>
                <h2>Email: <?php echo "$email"?> </h2>
            <?php
            } ?>
            
            <h2>Role: <?php echo "$role"?> </h2>

            <?php if ($public_intro == True){ ?>
                <h2>Introduction: <?php echo "$intro"?> </h2>
            <?php
            } ?>

            <?php if ($public_favfun == True){ ?>
                <h2>Favourite Fungi: <?php echo "$favfun"?> </h2>
            <?php
            } ?>
            
        
        













            
        </main>







    </div>
    </div>
</div>


</body>
</html>