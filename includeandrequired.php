<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 

    <?php require('var.php');
    echo "My".$name." and ".$batch;
    echo "something here";
    //required => fatal error => script stop 
    //include => shows warning => script running
    ?>

</body>
</html>