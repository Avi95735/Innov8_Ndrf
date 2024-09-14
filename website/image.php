<?php
include('dbconnecting.php'); // Ensure this file correctly establishes $con

if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . basename($file_name);

    // Check for upload errors
    if ($_FILES['image']['error'] === 0) {
        // Validate file type (optional but recommended for security)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($tempname);

        if (in_array($file_type, $allowed_types)) {
            // Insert file name into the database
            $query = "INSERT INTO images (file) VALUES ('$file_name')";

            // Execute the query and move the uploaded file
            if (mysqli_query($con, $query)) {
                if (move_uploaded_file($tempname, $folder)) {
                    echo "<h2>File uploaded successfully</h2>";
                } else {
                    echo "<h2>File not uploaded</h2>";
                }
            } else {
                echo "<h2>Database error: " . mysqli_error($con) . "</h2>";
            }
        } else {
            echo "<h2>Invalid file type. Only JPG, PNG, and GIF files are allowed.</h2>";
        }
    } else {
        echo "<h2>File upload error: " . $_FILES['image']['error'] . "</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required />
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <div>
        <?php
        // Ensure the database connection is available here
        $res = mysqli_query($con, "SELECT * FROM images");
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<img src="images/' . htmlspecialchars($row['file']) . '" style="max-width:200px;"/>';
            }
        } else {
            echo "<h2>Failed to fetch images: " . mysqli_error($con) . "</h2>";
        }
        ?>
    </div>
</body>
</html>