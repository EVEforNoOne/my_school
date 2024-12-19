<?php
include_once '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Create</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $registration_date = $_POST['registration_date'];


        $sql = "INSERT INTO students (first_name, last_name, email, phone,registration_date)
      VALUES ('$first_name', '$last_name', '$email', '$phone','$registration_date')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <form method="post">

        <label>First Name: </label>
        <input type="text" name="first_name" />
        <br /> <br />
        <label>Last Name: </label>
        <input type="text" name="last_name" />
        <br /><br />
        <label>Email: </label>
        <input type="text" name="email" />
        <br /><br />
        <label>Phone: </label>
        <input type="text" name="phone" />
        <br /><br />
        <label>Registration_date: </label>
        <input type="text" name="registration_date" />
        <br /><br />

        <button type="submit">Create</button>
    </form>
</body>

</html>