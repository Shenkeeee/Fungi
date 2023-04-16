<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/contactUs.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php
//    form alá szöveg
    if (isset($_GET['uzenet'])) {
        $uzenet = $_GET['uzenet'];
    }
    else{
        $uzenet = "";
    }


    $page = "register";
    include_once "../php/tools/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Register</span></h1></header>

        <main>
            <form action="../php/tools/registerNew.php" method="POST">
                <fieldset>
                <legend> Join us!</legend>
                    <label for="name">Username*: (at least 4 characters)</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email*:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password*: (at least 4 characters)</label>
                    <input type="password" id="password" name="password" required>

                    <label for="confpassword">Confirm Password*:</label>
                    <input type="password" id="confpassword" name="confpassword" required>


                <button type="submit">Register</button>
                <button type="reset">Reset</button>
                </fieldset>

            </form>
            <?php if($uzenet !== ""){echo "<p>". $uzenet . "</p>";}?>
        </main>


    </div>
    </div>
</div>

</body>
</html>