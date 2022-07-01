<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    Username : <input type="text" name="username"/><br><br>
    Password : <input type="password" name="pwd"/><br><br>
    <input type="submit" value="Submit"/>
    </form>
    <?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
if($_POST["username"] == "admin" && $_POST["pwd"] =="123"){
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["pwdd"]=$_POST["pwd"];
    header("location:dashboard.php");

}
}
?>

</body>
</html>