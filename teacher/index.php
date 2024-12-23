<?php
include_once '../partial/header.php';
?>


<h1 class="my-3">
    Teachers List
    <a class="btn btn-primary float-end" href="<?= $base_url ?>/teacher/create.php"> +New Teacher</a>
</h1>
<?php
$sql = "SELECT * FROM teachers";
$result = $conn->query($sql);
?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Hire Date</th>
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
                <td><?= $row["first_name"] ?></td>
                <td><?= $row["last_name"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["phone"] ?></td>
                <td><?= $row["hire_date"] ?></td>
                <td><?= $row["created_at"] ?></td>
                <td>
                    <a class="btn btn-warning" href="<?= $base_url ?>/teacher/edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= $base_url ?>/teacher/delete.php?id=<?= $row['id'] ?>">Delete</a>
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