<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Photos</title>
</head>
<body>
  <h1>Upload image</h1>
  <div class="myform"> 
    <form method="POST"enctype="multipart/form-data">
     <div class="input_field">
        <lebel>Name</lebel>
        <input type="text"name="username">
        <div class="input_field">
            <lebel>Select an image</lebel>
            <input type="File">
</div>
<div class="submit_btn">
    <button type="Submit"name="upload">UPLOAD<button>
</div>


    </form>
</div>
 <?php
 if(isset($_POST['upload'])){
    $ing_loc=$_FILES['profile']['tmp_name'];
    $ing_name=$_FILES['profile']['name']
    move_uploaded_file($ing_loc,"Uploaded Image/");
     
 }
 ?>
</body>
</html>