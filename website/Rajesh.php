<!DOCTYPE HTML>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" required>
            <label>File Upload</label>
            <input type="file" name="file" required>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "login";

// Establishing a connection to the database
$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $name = rand(1000, 100000) . "_" . basename($_FILES["file"]["name"]);
    $tname = $_FILES["file"]["tmp_name"];
    $uploads_dir = 'images';  
    if (!is_dir($uploads_dir) || !is_writable($uploads_dir)) {
        die("Upload directory does not exist or is not writable");
    }
    if (move_uploaded_file($tname, $uploads_dir . '/' . $name)) {
        $stmt = $conn->prepare("INSERT INTO fileup (title, image) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $name);
        if ($stmt->execute()) {
            echo "File successfully uploaded!";
        } else {
            echo "Error uploading file: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error moving file";
    }
}

mysqli_close($conn);
?>