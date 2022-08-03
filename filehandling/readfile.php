<?php
//1st Method
#echo readfile('word.txt');

//2nd Method
$file='word.txt';
$handler=fopen($file,'r');
$content=fread($handler,filesize($file));
#echo $content;
fclose($handler);

// only read first line
$output=fopen("word.txt","r") or die("failed to open your file");
#echo fgets($output);
fclose($output);

//Read End of File 
$out=fopen($file,"r") or die("failed to open your file");
while(!feof($out)){
    echo fgets($out)."<br>";
}
fclose($out);
?>