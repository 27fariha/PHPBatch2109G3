<?php
$username="root";
$host="localhost";
$password="";
$dbname="mywebsite";
$connect= mysqli_connect($host,$username,$password);
if(!$connect){
    die("could not connect to database".mysqli_error());
}
mysqli_select_db($connect,$dbname);

?>