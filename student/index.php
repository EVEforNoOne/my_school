<?php
include_once '../config/app.php';
include_once '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>

<body>
    <a href="<?= $base_url ?>/student/create.php">New Student</a>
    <h1>Students List</h1>
    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Registration_date</th>
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
                    <td><?= $row["registration_date"] ?></td>
                    <td><?= $row["created_at"] ?></td>

                    <td>
                        <a href="<?= $base_url ?>/student/edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="<?= $base_url ?>/student/delete.php?id=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>