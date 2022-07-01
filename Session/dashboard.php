<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}else{
    $username = $_SESSION["username"];
}

?>
    <h2>Dasboard : Welcome <?php echo $username?> </h2>
    <a href="dashboard1.php">click here</a>
</body>
</html>