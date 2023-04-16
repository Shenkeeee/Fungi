<?php

require_once "./connect.php";

$errors = [];

$name = $_POST["name"];
$password = $_POST["password"];
$confpassword = $_POST["confpassword"];
$email = $_POST["email"];

if(isset($name) && isset($password) && isset($confpassword) && isset($email) && trim($_GET["name"] !== "") && trim($_GET["password"] !== "") && trim($_GET["email"] !== "") && trim($_GET["confpassword"] !== ""))
{
        $sql = "SELECT * from users";
        $users = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($users,MYSQLI_ASSOC))
        {
            if($row["name"] === $name)
            {
                $errors[] = "There is someone with the same username.";
            }

            if($row["email"] === $email)
            {
                $errors[] = "There is someone with the same email.";
            }
        }

        if ($password !== $confpassword){
            $errors[] = "The two passwords are not the same.";
        }
        else
        {
            $hashedPass = password_hash($password,PASSWORD_DEFAULT);
        }

        if(strlen($name) < 4)
        {
            $errors[] = "The Username must be at least 4 characters.";
        }
        
        if(strlen($password) < 4)
        {
            $errors[] = "The password must be at least 4 characters.";
        }

        // if there were no errors
        if(empty($errors))
        {
            // adding user to sql
            $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'user')");
            $stmt->bind_param("sss", $name, $email, $hashedPass);
            $stmt->execute();

            $errors[] = "Registration done.";
        }

}

else{

    if($row["name"] === $name)
    {
        $errors[] = "There is someone with the same username.";
    }

    if($row["email"] === $email)
    {
        $errors[] = "There is someone with the same email.";
    }

    if ($password !== $confpassword){
        $errors[] = "The two passwords are not the same.";
    }

    if(strlen($name) < 4)
    {
        $errors[] = "The Username must be at least 4 characters.";
    }
    
    if(strlen($password) < 4)
    {
        $errors[] = "The password must be at least 4 characters.";
    }

    $errors[] = "Fill all of the fields.";
}

$uzenet = implode("<br>", $errors);
header("Location: ../register.php?uzenet=" . urlencode($uzenet));
