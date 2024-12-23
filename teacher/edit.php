<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">

    <a class="btn btn-outline-secondary" href="<?= $base_url ?>/teacher/index.php">
        &larr;
    </a>
    Edit Teacher Information
</h1>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM teachers WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hire_date = $_POST['hire_date'];

    $sql = "UPDATE  teachers SET first_name= '$first_name', last_name='$last_name', email='$email', phone='$phone', hire_date='$hire_date' WHERE id=$id ";

    if ($conn->query($sql) === TRUE) {
        echo "Record Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name"
        value="<?= $row['first_name'] ?>" />
    <br />

    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name"
        value="<?= $row['last_name'] ?>" />
    <br />

    <input type="text" name="email" class="form-control" placeholder="Enter Email"
        value="<?= $row['email'] ?>" />
    <br />

    <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
        value="<?= $row['phone'] ?>" />
    <br />

    <input type="text" name="hire_date" class="form-control" placeholder="Enter Hire Date"
        value="<?= $row['hire_date'] ?>" />
    <br />

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
include_once '../partial/footer.php';
?>