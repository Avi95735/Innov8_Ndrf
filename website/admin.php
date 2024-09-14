<!DOCTYPE html>
<html>
<body>
    <div role="banner">
        <br>
        <h1>WELCOME</h1>
        <br>
        <h3>HOW CAN WE HELP YOU!!!</h3>
        <br>
    </div>
    <br>
    <form method="post">
        <input type="text" name="department" placeholder="Department">
        <br><br>
        <input type="text" name="rank" placeholder="Rank">
        <br><br>
        <input type="text" name="firstName" placeholder="First Name">
        <br><br>
        <input type="text" name="middleName" placeholder="Middle Name">
        <br><br>
        <input type="text" name="lastName" placeholder="Last Name">
        <br><br>
        <input type="text" name="emailId" placeholder="Email Id">
        <br><br>
        <button type="submit" name="Submit">Sign In</button>
    </form>

    <?php
    // Create connection
    $con = mysqli_connect('localhost', 'root', '', 'login');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['Submit'])) {
        $name = $_POST['department'];
        $name1 = $_POST['rank'];
        $name2 = $_POST['firstName'];
        $name3 = $_POST['middleName'];
        $name4 = $_POST['lastName'];
        $email = $_POST['emailId'];

        // Corrected query
        $query = "INSERT INTO login2 (Department, Rank, first_name, middle_name, last_name, email) 
                  VALUES ('$name', '$name1', '$name2', '$name3', '$name4', '$email')";

        // Execute query
        if (mysqli_query($con, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }

    // Close connection
    mysqli_close($con);
    ?>
</body>
</html>