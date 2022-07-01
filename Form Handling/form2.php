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
$name=$email=$instname=$comment=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=test_data($_POST["name"]);
    $email=test_data($_POST["email"]);
    $instname=test_data($_POST["instname"]);
    $comment=test_data($_POST["comment"]);
    $gender=test_data($_POST["gender"]);

}
function test_data($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data,ENT_QUOTES);
    return $data;
}

?>
    <!-- method = post , get, put, delete &amp; -&-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Form Handling</h3>
    Name :  <input type="text" name="name"/><br><br>
    Email : <input type="email" name="email"/><br><br>
    Institute Name : <input type="text" name="instname"/><br><br>
    Comment : <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    Gender :
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>
    <input type="submit" value="Submit" name="submit"/>
    </form>

<?php
echo "Your Input : <br> Name :$name <br> Email : $email <br> 
        Institute Name: $instname <br> comment : $comment <br> Gender : $gender";
?>

</body>
</html>