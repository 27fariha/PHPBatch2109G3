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
// line comment
# line comment 
/* multi line comment*/

//variable
$name="aptech computer education"; //25

//string function
// echo strlen($name),"<br>";
// echo str_word_count($name),"<br>";
// //echo strrev($name),"<br>";
// echo strpos($name,"Computer"),"<br>";
// echo str_replace("Computer","NN",$name),"<br>";
// echo ucwords("lorem Ipsum has been the industry's standard dummy text ever since the"),"<br>";

// //Numeric Function
// $x=7.87;
// echo var_dump($x),"<br>";
// $a="5";
// $b=10; 
// $inta=(integer)$a;
// //$inta=intval($a);
// echo var_dump($inta);
// //echo $a+$b;
//echo var_dump($a);

//Math Function
# Pi value 
echo pi(),"<br>";

# min & max value
echo min(12,56,87,45,-30,86),"<br>";
echo max(12,56,87,45,-30,86),"<br>";

#absolute function
echo abs(-98.645),"<br>";

#squreroot function
echo sqrt(16),"<br>";

#round function
echo round(14.69),"<br>";

#random Number generator
echo rand(),"<br>";
echo rand(1,100),"<br>";

//constant
define("aptech","Aptech Computer Education Center");
echo aptech,"<br>";

//array constant
define("std",[
    "Huzaifa",  //0
    "Anas",     //1
    "Asad",     //2
    "Hamza",    //3
    "Balaj",    //4
    "Abdul Rehman"  //5
]);
echo std[4],"<br>";

// global constant
function Test(){
    echo aptech,"<br>";  
}
Test();



//special type=> null type
$empty=null;

//compound type=> array
$stdinfo=array("Anas","Batch2109g3",6500,"anas@abc.com",true);
echo var_dump($stdinfo),"<br>";
echo count($stdinfo),"<br>";
echo sizeof($stdinfo),"<br>";
echo var_dump($name);
//concatenation
echo "<br>".$name." North Nazimabad<br>";
echo "<br> $name North Nazimabad<br>";
echo "This", $name ," Aptech"," Computer"," Education";
echo "Hello world, PHP";

echo $empty;
?>
</body>
</html>