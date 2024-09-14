<!DOCTYPE html>
<html>

<head>
  <title>PHP - Upload image to database - Example</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="phppot-container">
    <h1>Upload image to database:</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <input type="file" name="image" accept="image/*">
        <input type="submit" value="Upload">
      </div>
    </form>

    <h2>Uploaded Image (Displayed from the database)</h2>
    <?php
// MySQL database connection settings
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "phppot_image_upload";

// Make connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and throw error if not available
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if an image file was uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = file_get_contents($image);

    // Insert image data into database as BLOB
    $sql = "INSERT INTO images(image) VALUES(?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $imgContent);
    $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());

    if ($current_id) {
        echo "Image uploaded successfully.";
    } else {
        echo "Image upload failed, please try again.";
    }
} else {
    echo "Please select an image file to upload.";
}

// Close the database connection
$conn->close();