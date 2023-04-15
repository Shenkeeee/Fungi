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
        </main>

    </div>
    </div>
</div>


</body>
</html>