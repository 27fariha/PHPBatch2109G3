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
    Email: <input type="text" name="email"/><br><br>
    Password : <input type="text" name="pwd"/><br><br>
    <input type="submit" value="Submit"/>
    </form>
    <?php
    include("connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];

    $sql="SELECT * FROM tb_registration WHERE email='$email' AND password='$pwd'";
    $result=mysqli_query($connect,$sql);
    $a=mysqli_fetch_array($result);
    if(is_array($a)){
        $_SESSION["email"]=$a["email"];
        $_SESSION["username"]=$a["username"];
        header("location:dashboard.php");
       
    }else{
        echo "Register First....";
        
    }
 mysqli_close($connect);  
    }
    ?>
</body>
</html>