<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">
    Class List
    <a class="btn btn-primary float-end" href="<?= $base_url ?>/class/create.php"> +New Class</a>
</h1>
<?php
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);
?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Course Id</th>
            <th>Teacher Id</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["course_id"] ?></td>
                <td><?= $row["teacher_id"] ?></td>
                <td><?= $row["created_at"] ?></td>
                <td>
                    <a class="btn btn-warning" href="<?= $base_url ?>/course/edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= $base_url ?>/course/delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
include_once '../partial/footer.php';
?>