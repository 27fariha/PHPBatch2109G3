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
    #1.without return & without parameter
    function add(){
        $c=15+20;
        echo $c."<br>";
    }
    #2.without return & with parameter
    function add1($a,$b){
        $c=$a+$b;
        print $c."<br>";
    }
    #3.with return & without parameter
    function add2(){
        $c=15+20;
        return $c;
    }
    #3.with return & with parameter
    function add3($a,$b){
        $c=$a+$b;
        return $c;
    }

    add();
    add1(12,10);
    echo add2()."<br>";
    echo add3(50,10);
    ?>
</body>
</html>