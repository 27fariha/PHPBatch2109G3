<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
?>
    <h1>Welcome  <?php echo  $_SESSION["username"]?> </h1>


    <a href="logout.php">Logout</a>
</body>
</html>