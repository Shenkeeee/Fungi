<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/contactUs.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php
    $page = "login";
    include_once "../php/tools/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Login</span></h1></header>

        <main>
            <form action="./tools/loginScript.php" method="POST">
                <fieldset>
                <legend> Welcome back! </legend>
                    <label for="name">Userame:*</label>
                    <input type="text" id="name" name="name" required>

                    <label for="password">Password:*</label>
                    <input type="password" id="password" name="password" required>


                <button type="submit">Login</button>
                <button type="reset">Reset</button>
                </fieldset>

            </form>
        </main>


    </div>
    </div>
</div>

</body>
</html>