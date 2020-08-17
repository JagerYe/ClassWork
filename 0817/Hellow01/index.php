<?php 
    session_start();
    if(isset($_POST["btnOK"])){
        $_SESSION["who"]=$_POST["txtUserName"];
        header("location: hellow.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Your name: 
        <input type="text" name="txtUserName" value="<?php echo $_POST["txtUserName"] ?>" />
        <input type="submit" name="btnOK" value="OK" />
        
    </form>
</body>
</html>