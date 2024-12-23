<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">

    <a class="btn btn-outline-secondary" href="<?= $base_url ?>/class/index.php">
        &larr;
    </a>
    Edit Class
</h1>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM classes WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $teacher_id = $_POST['teacher_id'];

    $sql = "UPDATE  classes SET name= '$name', course_id='$course_id', teacher_id='$teacher_id' WHERE id=$id ";

    if ($conn->query($sql) === TRUE) {
        echo "Record Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="name" class="form-control" placeholder="Enter Name"
        value="<?= $row['name'] ?>" />
    <br />

    <input type="text" name="course_id" class="form-control" placeholder="Enter Course Id"
        value="<?= $row['course_id'] ?>" />
    <br />

    <input type="text" name="teacher_id" class="form-control" placeholder="Enter Teacher Id"
        value="<?= $row['teacher_id'] ?>" />
    <br />

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
include_once '../partial/footer.php';
?>