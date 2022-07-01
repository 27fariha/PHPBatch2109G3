<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .error{ color: red;}
    </style>
</head>
<body>
<?php
$name=$email=$instname=$comment=$gender="";
$nameError=$emailError=$insError=$genderError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    # $_POST["name"]==""
    if(empty($_POST["name"])){
        $nameError="Name is Required"; 
    }else{
        $name=test_data($_POST["name"]);
        #var pattern=/^[a-zA-Z]*$/
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameError="Only Letters and white space allowed";
        }
    }
    if($_POST["email"]==""){
        $emailError="Email is Required";
    }else{
        $email=test_data($_POST["email"]);
    }
    if(empty($_POST["instname"])){
        $insError="Institute Name is Required";
    }else{
        $instname=test_data($_POST["instname"]);
    }
    if(empty($_POST["gender"])){
        $genderError="Select Gender";
    }else{
        $gender=test_data($_POST["gender"]);
    }
    $comment=test_data($_POST["comment"]);
    

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
    Name :  <input type="text" name="name"/><span class="error">*<?php echo $nameError?></span> <br><br>
    Email : <input type="email" name="email"/><span class="error">*<?php echo $emailError?></span><br><br>
    Institute Name : <input type="text" name="instname"/><span class="error">*<?php echo $insError?></span><br><br>
    Comment : <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    Gender :
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
     <span class="error">*<?php echo $genderError?></span><br><br>
    <input type="submit" value="Submit" name="submit"/>
    </form>

<?php
echo "Your Input : <br> Name :$name <br> Email : $email <br> 
        Institute Name: $instname <br> comment : $comment <br> Gender : $gender";
?>

</body>
</html>