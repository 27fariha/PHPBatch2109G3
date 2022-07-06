<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<?php
include("connect.php");
$fname=$lname=$email=$password=$username=$gender=$phone=$address="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=test_data($_POST["fname"]);
    $lname=test_data($_POST["lname"]);
    $email=test_data($_POST["email"]);
    $password=test_data($_POST["pwd"]);
    $username=test_data($_POST["username"]);
    $phone=test_data($_POST["numb"]);
    $address=test_data($_POST["add"]);
    $gender=test_data($_POST["gender"]);
}
function test_data($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data,ENT_QUOTES);
    return $data;
}
$sql="INSERT INTO tb_registration (fname,lname,email,password,username,phone,address,gender) 
VALUES ('$fname','$lname','$email','$password','$username','$phone','$address','$gender')";

if(!mysqli_query($connect,$sql)){
    die("could not insert data".mysqli_error($connect));
}
mysqli_close($connect);
?>
<!--first name, last name, email, password,username,phone no. , address,gender-->
<form action="" method="post">
First Name : <input type="text" name="fname" /><br><br>
Last Name: <input type="text" name="lname" /><br><br>
Email : <input type="email" name="email" /><br><br>
Password : <input type="password" name="pwd" /><br><br>
UserName : <input type="text" name="username" /><br><br>
Phone No : <input type="number" name="numb" /><br><br>
Address : <input type="text" name="add" /><br><br>
Gender :
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>
<input type="submit" name="submit" value="Register" /><br>



</form>
</body>
</html>