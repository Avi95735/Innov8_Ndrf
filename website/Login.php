<!DOCTYPE html>
<html >
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
        <input type="text" name="firstName" placeholder="First Name">
        <br><br>
        <input type="text" name="middleName" placeholder="Middle Name">
        <br><br>
        <input type="text" name="lastName" placeholder="Last Name">
        <br><br>
        <input type="text" name="mobileNo" placeholder="Mobile No.">
        <br><br>
        <input type="text" name="emailId" placeholder="Email Id">
        <br><br>
        <button type="submit" name="Submit">Sign In</button>
    </form>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'login');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['Submit'])) {
        $name = $_POST['firstName'];
        $name1 = $_POST['middleName'];
        $name2 = $_POST['lastName'];
        $mobile = $_POST['mobileNo'];
        $email = $_POST['emailId'];

        $query = "INSERT INTO login(first_name, middle_name, last_name, mobile_no, email) 
                  VALUES ('$name', '$name1', '$name2', '$mobile', '$email')";
        if (mysqli_query($con, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
    mysqli_close($con);
    ?>
</body>
</html>