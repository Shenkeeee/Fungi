<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ../php/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/users.css"

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php

    $page = "users";
    include_once "../php/tools/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Users</span></h1></header>
        <main>
            <h2> List of users </h2>

            <table>
                <tr>
                <th>Username</th>
                <th>Email</th> 
                <th>Role</th> 
                </tr>
            <?php

            require_once "./tools/connect.php";

            $sql = "SELECT * FROM users";
            $users = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($users, MYSQLI_ASSOC))
            {
                echo '<tr>';
                echo '<td class="dataRow">' . $row["name"] .'</td>';
                echo '<td class="dataRow">' . $row["email"] .'</td>';
                echo '<td class="dataRow">' . $row["role"] .'</td>';
                
                // you cannot send message to yourself
                if($row["name"] === $_SESSION["user"])
                {
                    echo '<td> <Label> You </Label> </td>';
                }
                else
                {
                    echo '<td> <Button> Send Message </Button> </td>';

                    // admin privileges
                    if($_SESSION["role"] === "admin")
                    {
                        echo '<td> <Button> Change Role </Button> </td>';
                        echo '<td> <Button> Delete User </Button> </td>';
                    }
                }

                echo '</tr>';
            }
            
            ?>

            </table>

        </main>

    </div>
    </div>
</div>


</body>
</html>