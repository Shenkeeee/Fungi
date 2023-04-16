<?php
 if(!isset($_SESSION["user"]))
 {
     session_start();
 }

if (!isset($_SESSION["user"])) {
    // ha a felhasználó nincs belépve (azaz a "user" munkamenet-változó értéke nem került korábban beállításra), akkor a login.php-ra navigálunk
    header("Location: ../php/Login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/profile.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php

    $page = "profile";
    include_once "../php/tools/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Profile</span></h1></header>
            <main>
            <h2> Welcome matey! </h2>

            <!-- delete from database -->
            <form action="./tools/delete.php" method="POST">
                <input type="hidden" name="deletableNameSelf" value="<?= $_SESSION["user"] ?>">
                <input type="hidden" name="deletableName" value="<?= $_SESSION["user"] ?>">
                <button type="submit">Delete User</button>
            </form>


            <!-- The enctype="multipart/form-data" attribute is required for file uploads. -->
            <!-- upload profile picture -->
            <form action="./tools/upload.php" method="POST" enctype="multipart/form-data">
                <label for="profilePicture">Upload Profile Picture:</label>
                <input type="file" name="profilePicture" id="profilePicture">
                <button type="submit">Upload</button>
            </form>


        <?php

        //kép megjelenítése 
        //sql betölt 
        require_once "./tools/connect.php";

        $sql = "SELECT * FROM users";
        $users = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
        {
            if($row["name"] === $_SESSION["user"])
            {
                $img = $row["profile_picture"];

            }
        }


        ?>

        
        <img src="../img/profilePictures/<?php echo "$img" ?>" alt="Profile_Picture" width="200" height="150">
        
        













            
        </main>







    </div>
    </div>
</div>


</body>
</html>