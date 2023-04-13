<?php

require_once "./connect.php";

$uzenet = "";

$name = $_POST["name"];
$password = $_POST["password"];
$confpassword = $_POST["confpassword"];
$email = $_POST["email"];

if(isset($name) && isset($password) && isset($confpassword) && isset($email) && trim($_GET["name"] !== "") && trim($_GET["password"] !== "") && trim($_GET["email"] !== "") && trim($_GET["confpassword"] !== ""))
{
    if ($password === $confpassword)
    {
        $hashedPass = password_hash($password,PASSWORD_DEFAULT);

        $sql = "SELECT * from users";
        $users = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($users,MYSQLI_ASSOC))
        {
            echo $row["name"];
            if($row["name"] === $name)
            {
                $uzenet= "There is someone with the same username.";
                header("Location: ../register.php?uzenet=" . urlencode($uzenet));
            }

            if($row["email"] === $email)
            {
                if($uzenet === "")
                {   
                    $uzenet= "There is someone with the same email.";
                    header("Location: ../register.php?uzenet=" . urlencode($uzenet));
                }
            }
        }

        // if there was no mistake with the sql
        if($uzenet === "")
        {
            // adding user to sql
            $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'user')");
            $stmt->bind_param("sss", $name, $email, $hashedPass);
            $stmt->execute();

            $uzenet= "Registration done.";
            header("Location: ../register.php?uzenet=" . urlencode($uzenet));    
        }
        
    }

    else{
        $uzenet= "The two passwords are not the same.";
        header("Location: ../register.php?uzenet=" . urlencode($uzenet));
    }
}

else{
    $uzenet="Fill all of the fields.";
    header("Location: ../register.php?uzenet=" . urlencode($uzenet));
}