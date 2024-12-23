<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">

    <a class="btn btn-outline-secondary" href="<?= $base_url ?>/teacher/index.php">
        &larr;
    </a>
    Create Teachers
</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hire_date = $_POST['hire_date'];

    $sql = "INSERT INTO teachers (first_name, last_name,email,phone,hire_date)
      VALUES ('$first_name', '$last_name', '$email','$phone','$hire_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
    <br />
    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
    <br />
    <input type="text" name="email" class="form-control" placeholder="Enter Email" />
    <br />
    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" />
    <br />
    <input type="text" name="hire_date" class="form-control" placeholder="Enter Hire Date" />
    <br />

    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php
include_once '../partial/footer.php';
?>