<?php
$username="root";
$host="localhost";
$password="";
#mysqli_connect(hostname,username,password); => 0,1
$connect= mysqli_connect($host,$username,$password);
if(!$connect){
    die("could not connect to database".mysqli_error());
}

$sql="CREATE DATABASE example";
#$sql="DROP DATABASE aptech";  #delete
if(mysqli_query($connect,$sql)){
    echo "Database Created";
}else{
    echo "Error while creating database".mysqli_error($connect); 
}
#echo "connection to database is successful";
mysqli_close($connect);

?>