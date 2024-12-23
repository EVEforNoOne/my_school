<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">

    <a class="btn btn-outline-secondary" href="<?= $base_url ?>/class/index.php">
        &larr;
    </a>
    Create Class
</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $teacher_id = $_POST['teacher_id'];

    $sql = "INSERT INTO classes (name, course_id, teacher_id)
      VALUES ('$name', '$course_id', '$teacher_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="name" class="form-control" placeholder="Enter Name" />
    <br />
    <input type="text" name="course_id" class="form-control" placeholder="Enter Course Id" />
    <br />
    <input type="text" name="teacher_id" class="form-control" placeholder="Enter Teacher Id" />
    <br />

    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php
include_once '../partial/footer.php';
?>