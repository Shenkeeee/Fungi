<!--<! ABOUT FUNGI&ndash;&gt;-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Fungi</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/aboutFungi.css">
    <link rel="icon" href="../img/icon.png">
</head>
<body>

<div class="main">
    <?php
    $page = "about";
    include_once "../php/tools/navbar.php";
    ?>
    <div class="content">
        <div class="h1">
            <header> <h1><span>ABOUT FUNGI</span> </h1></header>
        </div>


        <div class="textbox">
            <p>
                Welcome to the world of fungi! Fungi are a diverse group of organisms that play a
            vital role in our <br>
            ecosystem and have a rich history of use in food, medicine, and even art.<br>
            <br>

            From mushrooms and molds to yeasts and lichens, fungi are found in nearly every habitat on <br>
            earth, from the depths of the ocean to the tops of the tallest mountains. They play a critical role <br>
            in breaking down dead plant matter and returning nutrients to the soil, and are also important<br>
            decomposers of wood and other organic materials.<br><br>

            In addition to their ecological significance, fungi have a long history of use by humans. <br>
            Edible mushrooms have been enjoyed as a food source for thousands of years, while yeasts are used <br>
            in the production of bread, beer, and other fermented products. Medicinal mushrooms have been used for <br>
            their health-promoting properties for centuries, and many species of fungi are still being studied for <br>
            their potential to treat a wide range of medical conditions.<br><br>

            Whether you are a seasoned mycologist or a curious beginner, there is always something new to <br>
            discoverin the world of fungi. From their unique biology and fascinating diversity to their role <br>
            in our lives, fungi offer a fascinating window into the natural world and the intricate connections <br>
            between all living things.
            </p>
        </div>
        <h2>Our Favourite (and only) Fungi themed song:</h2>
        <audio controls>
            <source src="../media/mushroomsong.mp3" type="audio/mpeg"/>
            This browser cannot support audio, sorry!
        </audio>
        <video controls autoplay loop width="360">
            <source src="../media/video.mp4" type="video/mp4"/>
            This browser cannot support video, sorry!
        </video>
        <script>
            var video = document.querySelector('video');
            video.muted = true;
        </script>

    </div>
</div>
<!-- <footer>Fungi.</footer> -->

</body>
</html>




