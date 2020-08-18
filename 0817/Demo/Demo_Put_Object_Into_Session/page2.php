<?php
require_once "ClassLib.php";
session_start();

if (!isset($_SESSION["obj"])) {
	$obj = new CDog(2, 20);	
	$_SESSION["obj"] = $obj;//如session內有東西時就不會重複創造，但程式結束時還是會殺掉程式中的物件，非session內的物件
}
else {
	$obj = $_SESSION["obj"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	
	<?php echo "Weight = " . $obj->getWeight() . "<br>"?>
	<?php echo "Price = " . $obj->getPrice() . "<br>"?>
	<hr>
	<a href="index.php">Home</a><br>
</body>
</html>