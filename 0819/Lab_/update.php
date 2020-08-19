<?php
if (!isset($_GET["id"])) {
    echo ("沒ID");
    exit();
}
$id = $_GET["id"];
if (!is_numeric($id)) {
    echo ("沒ID");
    exit();
}
require_once("connDB.php");


if (isset($_POST["submit"])) {
    $sqlStr = <<<Sql
    UPDATE `employee` 
    SET
    `firstName`='{$_POST["firstName"]}',
    `lastName`='{$_POST["lastName"]}',
    `cityId`={$_POST["city"]}
    WHERE `employeeId`=$id
    Sql;
    mysqli_query($line, $sqlStr);
    mysqli_close($line);
    header("location: index.php");
    exit();
}
$sqlStr = <<<Sql
SELECT * FROM employee WHERE employeeId = $id;
Sql;
$request = mysqli_query($line, $sqlStr);
$row = mysqli_fetch_assoc($request);
$sqlCityStr = <<<Sql
SELECT `cityId`, `cityName` FROM `city`;
Sql;

$cityRequest = mysqli_query($line, $sqlCityStr);
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
                    <input id="firstName" name="firstName" type="text" value="<?= $row['firstName'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-4 col-form-label">Last Name</label>
                <div class="col-8">
                    <input id="lastName" name="lastName" type="text" value="<?= $row['lastName'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-4 col-form-label">City</label>
                <div class="col-8">
                    <select id="city" name="city" class="custom-select">
                        <?php while ($cityRow = mysqli_fetch_assoc($cityRequest)) { ?>
                            <!--            抓取city的id                判斷傳來的id跟生成的id是否相同，相同責備選擇                        抓cityName-->
                            <option value="<?= $cityRow['cityId'] ?>" <?=($row['cityId']==$cityRow['cityId'])?"selected":""?>><?= $cityRow['cityName'] ?></option>
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