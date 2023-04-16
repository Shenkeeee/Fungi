<?php 
    if(!isset($_SESSION["user"]))
    {
        session_start();
    }
?>

<!-- itt csináljuk a menüsort hogy ne kelljen mindenhol-->
<nav class="navbar">
    <ul>    
        
        <li class="navbarReg"><a <?php if(isset($_SESSION["user"])) { ?> href="../php/Users.php" <?php } else { ?> href="../php/Login.php" <?php } if($page === "users") { echo 'id="selected"'; } ?>>Users</a></li>
        <li class="navbarReg"><a <?php if(isset($_SESSION["user"])) { ?> href="../php/Chat.php" <?php } else { ?> href="../php/Login.php" <?php } if($page === "chat") { echo 'id="selected"'; } ?>>Chat</a></li>


        <li><a href="../php/Home.php" <?php if($page === "home") { echo 'id="selected"'; } ?>> Home</a></li>
        <li><a href="../php/AboutFungi.php"<?php if($page === "about") { echo 'id="selected"'; } ?>>About</a></li>
        <li><a href="../php/TypesofFungi.php" <?php if($page === "types") { echo 'id="selected"'; } ?> >Types</a></li>

        <li><a href="../php/ImportanceofFungi.php"  <?php if($page === "importance") { echo 'id="selected"'; } ?>>Importance</a></li>
        <li><a href="../php/LearningandResources.php" <?php if($page === "learning") { echo 'id="selected"'; } ?>>Learning</a></li>
        <li><a href="../php/ContactUs.php" <?php if($page === "contact") { echo 'id="selected"'; } ?>>Contact</a></li>


    <?php if(!isset($_SESSION["user"])) { ?>
    
        <li class="navbarReg"><a href="../php/Register.php" <?php if($page === "register") { echo 'id="selected"'; } ?>>Register</a></li>
        <li class="navbarReg"><a href="../php/Login.php" <?php if($page === "login") { echo 'id="selected"'; } ?>>Login</a></li>

    <?php } else { ?>
    
        <li class="navbarReg"><a href="../php/Profile.php" <?php if($page === "profile") { echo 'id="selected"'; } ?>>Profile</a></li>
        <li class="navbarReg"><a href="../php/tools/signOutScript.php">Sign Out</a></li>
        
    <?php } ?>
    </ul>
</nav>