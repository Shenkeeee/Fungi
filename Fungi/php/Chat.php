<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/forAll.css">
    <link rel="stylesheet" href="../css/chat.css">

    <link rel="icon" href="../img/icon.png">
</head>
<body>
<div class="main">

    <?php
    $page = "chat";
    include_once "../php/tools/navbar.php";
    ?>

    <div class="content">
        <div class="container">

            <header><h1><span>Chat</span></h1></header>

        <main>
            <form action="./tools/writeMessage.php" method="POST">    
                    <label for="messages">Messages</label>
                    <textarea id="messages" name="messages" rows="22" readonly>
                    <?php
                    require_once("./tools/connect.php");

                    $sql = "SELECT * from chat";
                    $messagesData = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_array($messagesData))
                    {
                        echo $row["sender"] . ":" . $row["message"] . "\n";
                    }
                ?>
                    </textarea>

                    <!-- specific message sending -->

                    <!-- <label for="user">To:</label> -->
                    <!-- <select id="user" name="user" required>
                    <?php
                        // session_start();

                        // require_once("./connect.php");

                        // if(isset($_POST["messageTo"]))
                        // {
                        //     $messageTo = $_POST["messageTo"];
                        // }

                        // $sql = "SELECT * FROM users";
                        // $users = mysqli_query($conn, $sql);

                        // if (!$users) {
                        //     echo mysqli_error($conn);
                        // }

                        // if(mysqli_num_rows($users) == 0) {
                        //     echo "<option value=''>No users found</option>";
                        // } else {
                        //     while($row = mysqli_fetch_array($users, MYSQLI_ASSOC)) {
                        //         echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        //     }
                        // }
                    ?>
                    </select> -->

                <?php
                    // require_once "./tools/listMessages.php";
                ?>
                <label for="message">Write</label>
                <input type="text" id="message" name="message"  required></input>

                <button type="submit">Send Message</button>
                <button type="reset">Reset</button>
              

            </form>
        </main>


    </div>
    </div>
</div>

</body>
</html>