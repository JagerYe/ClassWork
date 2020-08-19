<?php
require_once("connDB.php");
if (isset($_POST["submit"])) {

    $sqlStr = <<<Sql
    INSERT INTO employee(firstName, lastName, cityId)
    VALUES ('{$_POST["firstName"]}','{$_POST["lastName"]}',{$_POST["city"]});
    Sql;

    mysqli_query($line, $sqlStr);
    mysqli_close($line);
    header("location: index.php");
    exit();
}

$sqlCityStr = <<<Sql
SELECT `cityId`, `cityName` FROM `city`;
Sql;

$request = mysqli_query($line, $sqlCityStr);
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
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <form method="POST">
            <div class="form-group row">
                <label for="firstName" class="col-4 col-form-label">First Name</label>
                <div class="col-8">
                    <input id="firstName" name="firstName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-4 col-form-label">Last Name</label>
                <div class="col-8">
                    <input id="lastName" name="lastName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-4 col-form-label">City</label>
                <div class="col-8">
                    <select id="city" name="city" class="custom-select">
                        <?php while ($row = mysqli_fetch_assoc($request)) { ?>
                            <option value="<?= $row['cityId'] ?>"><?= $row['cityName'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary" value="Ok">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>