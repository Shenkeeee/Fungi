<!--<! FUNGIIIII&ndash;&gt;-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="icon" href="../img/icon.png">
</head>
<body>

<!--removing blur from here-->
<div class="main" style="background: none">
    <?php

    if (isset($_GET['uzenet'])) {
        $uzenet = $_GET['uzenet'];
    }
    else{
        $uzenet = "";
    }

    $page = "home";
    include_once "../php/tools/navbar.php";
    ?>
    <div class="content">

        <header><h1><span>FANTASTIC  <br> FUNGI</span> </h1></header>
        <q>The greatest secrets are always hidden in the most unlikely places.</q>


        <?php if (!isset($_SESSION["user"]) && $uzenet===""){ ?>
            <h2 class="par">Timea Nemet & Mate Subicz</h2>

        <?php } elseif($uzenet!=="")  { ?>
<!--                ha most jelentkezett ki -->
            <h2 class="par"> <?php echo  "$uzenet"  ?>  </h2>
        <?php } else{ ?>
<!--                ha belépett -->
        <h2 class="par"> Welcome <?php echo $_SESSION["user"]; ?>!</h2>
        <?php $uzenet=""; ?> 

        <?php } ?>
    </div>
</div>
<footer>Created in early 2023.</footer>
</body>
</html>