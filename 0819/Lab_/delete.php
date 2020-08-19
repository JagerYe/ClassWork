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
$sqlStr = <<<Sql
DELETE FROM employee WHERE employeeId = $id;
Sql;
$request = mysqli_query($line, $sqlStr);
mysqli_close($line);
header("location: index.php");
exit();
