<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<!--   file Mode
        1. r-read file
        2. w- write / create file
        3. a - append file -->
<?php
$txt='<br> this is php file handler2';
$fp=fopen('file1.txt','a'); # $fp=fopen('file1.txt','w');
fwrite($fp,$txt);
fclose($fp);
echo "File has been written";
?>
</body>
</html>