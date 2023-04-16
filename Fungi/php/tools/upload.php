<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "User not logged in";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePicture"])) {
    $file = $_FILES["profilePicture"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];

    // check file type
    $allowedTypes = ["image/jpeg", "image/png"];
    if (!in_array($fileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // check file size
    $maxSize = 500000; // 500 KB
    if ($fileSize > $maxSize) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // generate unique filename
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $newFileName = uniqid() . "." . $fileExt;

    // save file to server
    $uploadDir = "../../img/profilePictures/";
    $uploadPath = $uploadDir . $newFileName;
    move_uploaded_file($fileTmpName, $uploadPath);

    // save filename to database
    $conn = mysqli_connect("localhost", "username", "password", "fungi");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_SESSION["user"];
    $sql = "UPDATE users SET profile_picture=? WHERE name=?";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die("Statement preparation failed: " . mysqli_error($conn));
    }

    if (!mysqli_stmt_bind_param($stmt, "ss", $newFileName, $name)) {
        die("Bind param failed: " . mysqli_stmt_error($stmt));
    }

    if (!mysqli_stmt_execute($stmt)) {
        die("Execute failed: " . mysqli_stmt_error($stmt));
    }

    if (!mysqli_stmt_close($stmt)) {
        die("Close failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_close($conn);

    //redirect back to profile page
    header("Location: ../Profile.php");
    exit;
}

?>
