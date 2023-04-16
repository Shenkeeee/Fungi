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
                    <!-- listing messages -->
                    <textarea id="messages" name="messages" rows="22" readonly><?php
                    require_once("./tools/connect.php");

                    // who did we send the last message to?
                    $userTo = "Everyone";
                    if(isset($_GET["userTo"]))
                    {
                        $userTo = $_GET["userTo"];
                    }

                    if($userTo==="Everyone")
                    {
                        $sql = "SELECT * from chat WHERE receiver = '$userTo'";
                    }
                    else{
                        $sql = "SELECT * from chat WHERE (receiver = '$userTo' AND sender = '{$_SESSION['user']}') OR receiver = '{$_SESSION['user']}' AND sender = '$userTo' ";
                    }
                    $messagesData = mysqli_query($conn,$sql);

                    $messages = "";

                    while($row = mysqli_fetch_array($messagesData))
                    {
                        $messages .= $row["sender"] . ": " . $row["message"] . "\n";
                    }

                    echo $messages;
                    ?></textarea>

                    <!-- switch to list users -->
                    <label for="userTo">To:</label>
                    <select id="userTo" name="userTo" required oninput="location='./Chat.php?userTo=' + this.value;">
                        <option value = "Everyone" selected>Everyone</option>
                        <?php
                        require_once "./tools/connect.php";
                        $sql = "SELECT * FROM users";
                        $usersData = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($usersData)) {
                            if($row['name']===$_SESSION['user']){continue;}
                            if($userTo === $row['name'])
                            {
                                echo '<option value="' . $row['name'] . '" selected>' . $row['name'] . '</option>';
                            }
                            else{
                                echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                            }
                        }
                        ?>
                    </select>

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