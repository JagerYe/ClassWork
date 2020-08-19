<?php
require_once("connDB.php");
$sqlStr = <<<Sql
SELECT employeeId, firstName, lastName, cityName
FROM city AS c
JOIN employee AS e
ON e.cityId = c.cityId
ORDER BY employeeId;
Sql;
$request = mysqli_query($line, $sqlStr);
mysqli_close($line);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Hover Rows<a class="btn-outline-success float-right btn" href="insert.php">新增</a></h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>City</th>
                    <th></th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($request)) { ?>
                <tbody>
                    <tr>
                        <td><?= $row["firstName"] ?></td>
                        <td><?= $row["lastName"] ?></td>
                        <td><?= $row["cityName"] ?></td>
                        <td>
                            <span class="float-right">
                                <a class="btn-outline-success btn-sm" href="update.php?id=<?= $row['employeeId'] ?>">編輯</a>
                                |
                                <a class="btn-outline-danger btn-sm" href="delete.php?id=<?= $row['employeeId'] ?>">刪除</a>
                            </span>
                        </td>
                    </tr>

                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>