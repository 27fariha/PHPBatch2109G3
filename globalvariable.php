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
    #variable scope => local , global
    
    #local 
    function add(){
        $x=123;
        $y=543;
        echo $x+$y;
    }
    add();


    #global
    $a=234;
    $b=665;
    function subtract(){
        global $a,$b,$y;
        $y=$a-$b;
        echo $a;
    }
    subtract();
    echo $y;


    $z=765;
    $h=654;
    function multiply(){
        $GLOBALS['t']=$GLOBALS['z']*$GLOBALS['h'];
    }
    multiply();
    echo "<br>".$t;
    ?>
</body>
</html>