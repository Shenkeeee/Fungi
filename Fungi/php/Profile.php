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

            <header><h1><span>Profile</span></h1></header>
            <main>
            <h2>Welcome <?php echo "$name"?> !</h2>

        <img src="../img/profilePictures/<?php echo "$img" ?>" alt="Profile_Picture" width="200" height="200">

        <!-- ROLE -->
        <h2>Role: <?php echo "$role"?> </h2>













        <!-- EMAIL -->
        <div class="container_public">

        <h2 style= "color: rgb(173, 214, 9) ">Email:</h2>

        <form action="./Profile.php?setemail=set" method="POST">
                <input type="hidden" name="setintro" value="<?= $_SESSION["user"] ?>">
                <button class="button_set" type="submit">Change E-mail </button>
        </form>

        <?php 
        if ( "$public_email" == 0){ ?> 
            <form action="./tools/setemail.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_public" type="submit">Set E-mail to Public</button>
            </form>
        <?php 
        }else{ ?>
            <form action="./tools/setemail.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_private" type="submit">Set E-mail to Private</button>
        </form>
        <?php } ?>
        </div>

        <?php 
        if (isset($_GET['setemail'])) {
            //$setintro = $_GET['setintro'];
            ?>

            <form action="./tools/emailset.php" me  thod="POST">
            <label for="setemail"></label>
            <input type="email" id="email" name="email">
            <button class="button_sub" type="submit">Submit</button>
            </form>


            <?php 
            }
            else{?>

                <h3> <?php echo "$email"?> </h3>

                <?php 
            }
            ?>













        <!-- INTRO -->
        <div class="container_public">

        <h2 style= "color: rgb(173, 214, 9) ">Intro:</h2>

        <form action="./Profile.php?setintro=set" method="POST">
                <input type="hidden" name="setintro" value="<?= $_SESSION["user"] ?>">
                <button class="button_set" type="submit">Set Intro </button>
        </form>

        <?php 
        if ( "$public_intro" == 0){ ?> 
            <form action="./tools/setintro.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_public" type="submit">Set Introduction to Public</button>
            </form>
        <?php 
        }else{ ?>
            <form action="./tools/setintro.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_private" type="submit">Set Introduction to Private</button>
        </form>
        <?php } ?>
        </div>

        
        <?php 
        if (isset($_GET['setintro'])) {
            //$setintro = $_GET['setintro'];
            ?>

            <form action="./tools/introset.php" method="POST">
            <label for="setintro"></label>
            <input type="text" id="intro" name="intro">
            <button class="button_sub" type="submit">Submit</button>
            </form>


            <?php 
            }
            else{?>

                <h3>"  <?php echo "$intro"?> "</h3>

                <?php 
            }
        ?>

        
        <!-- FAVFUN -->

        <div class="container_public">

        <h2 style= "color: rgb(173, 214, 9)">Favourite Fungi:</h2>


        <form action="./Profile.php?setfavfun=set" method="POST">
                <input type="hidden" name="favfun" value="<?= $_SESSION["user"] ?>">
                <button class="button_set" type="submit">Set FAVFUN </button>
        </form>

        <?php 
        if ( "$public_favfun" == 0){ ?> 
            <form action="./tools/setfavfun.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_public" type="submit">Set FAVFUN to Public</button>
            </form>
        <?php 
        }else{ ?>
            <form action="./tools/setfavfun.php" method="POST">
                <input type="hidden" name="name" value="<?= $_SESSION["user"] ?>">
                <button class="button_private" type="submit">Set FAVFUN to Private</button>
        </form>
        <?php } ?>
        </div>

        <?php 
        if (isset($_GET['setfavfun'])) {
            //$setintro = $_GET['setintro'];
            ?>

            <form action="./tools/favfunset.php" method="POST">
            <label for="favfun"></label>
            <input type="text" id="favfun" name="favfun">
            <button class="button_sub" type="submit">Submit</button>
            </form>


            <?php 
            }
            else{?>

                <h3> " <?php echo "$favfun"?> " </h3>

                <?php 
            }
        ?>




       



        

        <!-- The enctype="multipart/form-data" attribute is required for file uploads. -->
        <!-- upload profile picture -->
        <form action="./tools/upload.php" method="POST" enctype="multipart/form-data">
            <label for="profilePicture">Upload Profile Picture:</label>
            <input type="file" name="profilePicture" id="profilePicture">
            <button type="submit">Upload</button>
        </form>



        

         <!-- delete from database -->
         <form action="./tools/delete.php" method="POST">
                <input type="hidden" name="deletableNameSelf" value="<?= $_SESSION["user"] ?>">
                <input type="hidden" name="deletableName" value="<?= $_SESSION["user"] ?>">
                <button class = "button_delete" type="submit">Delete User</button>
        </form>
        
        













            
        </main>







    </div>
    </div>
</div>


</body>
</html>