
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/forAll.css">
    <link rel="stylesheet" href="../../css/profile.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php

    $page = "";
    include_once "./navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Profile</span></h1></header>
            <main>
            <h2> Welcome matey! </h2>



        <?php

        
        //sql betölt 

        require_once("./connect.php");

        $sql = "SELECT * FROM users";
        $users = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
        {
            if($row["name"] === $_POST["changeableName"])
            {
                $img = $row["profile_picture"];

        }
        }





        ?>

        
        <img src="../../img/profilePictures/<?php echo "$img" ?>" alt="Profile_Picture" width="200" height="150">
        
        













            
        </main>







    </div>
    </div>
</div>


</body>
</html>