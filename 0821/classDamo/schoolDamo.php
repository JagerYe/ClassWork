<?php
$soreList = array(100, 50, 90, 40);
$viewModel = [];
foreach ($soreList as $sore) {
    $student = (object)["sore" => $sore, "style" => ""];
    if ($sore < 60) {
        $student->style = "fall";
    }
    $viewModel[] = $student;
}

// $obj = (object)["firstName" => "GG", "lastName" => "InIn"];
// echo $obj->lastName;
// exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .fall {
        color: red;
    }
</style>

<body>
    <ul>
        <?php foreach ($viewModel as $student) { ?>
            <li class="<?= $student->style ?>"><?= $student->sore ?></li>
        <?php } ?>
    </ul>
</body>

</html>