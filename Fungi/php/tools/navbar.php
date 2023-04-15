<?php 
    if(!isset($_SESSION["user"]))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>navbar</title>
</head>
<body>

<nav class="navbarReg" >
    <?php if(!isset($_SESSION["user"])) { ?>
    <ul>
        <li style="float: right"><a href="../php/Login.php" <?php if($page === "login") { echo 'id="selected"'; } ?>>Login</a></li>
        <li><a href="../php/Register.php" <?php if($page === "register") { echo 'id="selected"'; } ?>>Register</a></li>
    </ul>
    <?php } else { ?>
        <ul>
            <li style="float: right"><a href="../php/tools/signOutScript.php">Sign Out</a></li>
            <li><a href="../php/Profile.php" <?php if($page === "profile") { echo 'id="selected"'; } ?>>Profile</a></li>
        </ul>
    <?php } ?>
</nav>

<nav class="navbarLeft";>
    
        <ul  width="200px">
            <li><a <?php if(isset($_SESSION["user"])) { ?> href="../php/Users.php" <?php } else { ?> href="../php/Login.php" <?php } if($page === "users") { echo 'id="selected"'; } ?>>Users</a></li>
            <li><a <?php if(isset($_SESSION["user"])) { ?> href="../php/Chat.php" <?php } else { ?> href="../php/Login.php" <?php } if($page === "chat") { echo 'id="selected"'; } ?>>Chat</a></li>
        </ul>
       
</nav>

<!-- itt csináljuk a menüsort hogy ne kelljen mindenhol-->
<nav class="navbar">
    <ul>
        <li><a href="../php/Home.php" <?php if($page === "home") { echo 'id="selected"'; } ?>> Home</a></li>
        <li><a href="../php/AboutFungi.php"<?php if($page === "about") { echo 'id="selected"'; } ?>>About</a></li>
        <li><a href="../php/TypesofFungi.php" <?php if($page === "types") { echo 'id="selected"'; } ?> >Types</a></li>

        <li><a href="../php/ImportanceofFungi.php"  <?php if($page === "importance") { echo 'id="selected"'; } ?>>Importance</a></li>
        <li><a href="../php/LearningandResources.php" <?php if($page === "learning") { echo 'id="selected"'; } ?>>Learning</a></li>
        <li><a href="../php/ContactUs.php" <?php if($page === "contact") { echo 'id="selected"'; } ?>>Contact</a></li>

    </ul>
</nav>

</body>
</html>