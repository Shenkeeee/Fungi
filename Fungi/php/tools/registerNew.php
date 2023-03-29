<?php

$uzenet = "";

$name = $_GET["name"];
$password = $_GET["password"];
$confpassword = $_GET["confpassword"];
$email = $_GET["email"];

if(isset($name) && isset($password) && isset($confpassword) && isset($email) && trim($_GET["name"] !== "") && trim($_GET["password"] !== "") && trim($_GET["email"] !== "") && trim($_GET["confpassword"] !== ""))
{
    if ($password === $confpassword)
    {
//        letezik mar ilyen felh vagy nem?

        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        //register


        $uzenet= "DUN";
        header("Location: ../register.php?uzenet=" . urlencode($uzenet));

    }

    else{
        $uzenet= "Exuse me but the two passwords are not the same. ";
        header("Location: ../register.php?uzenet=" . urlencode($uzenet));
    }
}

else{
    $uzenet="go fill your data pls";
    header("Location: ../register.php?uzenet=" . urlencode($uzenet));
}