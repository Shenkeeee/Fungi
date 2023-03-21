<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/contactUs.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php
    $page = "contact";
    include_once "../php/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Contact us</span></h1></header>

        <main>
            <form>
                <fieldset>
                <legend> Contact us here!</legend>
                    <label for="name">Name:*</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:*</label>
                    <input type="email" id="email" name="email" required>

                    <label for="subject">Subject:*</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:*</label>
                <textarea id="message" name="message" rows="8" required></textarea>

                <button type="submit">Send Message</button>
                <button type="reset">Reset</button>
                </fieldset>

            </form>
        </main>


    </div>
    </div>
</div>

<footer>
    Thanks for your interest!
</footer>

</body>
</html>