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
    class B2109G3{
        function Huzaifa(){
            $name="Huzaifa";
            $age=20;
            $address="Apteh computer Education";
            echo $name,$age,$address;
        }

        function Anas(){
            $name="Anas";
            $age=20;
            $address="Apteh computer Education";
            echo $name,$age,$address;
        }
        function Hamood(){
            $name="Hamood";
            $age=20;
            $address="Apteh computer Education";
            echo "<h1>",$name,$age,$address,"</h1>";
        }
    }
    $Batch=new B2109G3();
    $Batch->Hamood();
    $Batch->Huzaifa();
    
    
    ?>
</body>
</html>