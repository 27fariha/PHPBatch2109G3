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
$name=$_SESSION["name"];
$id=$_SESSION["stdid"];
?>
<h2>Welcome <?php echo $name ?></h2>

</body>
</html>