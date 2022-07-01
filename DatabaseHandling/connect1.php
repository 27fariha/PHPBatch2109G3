<?php
$host="localhost";
$username="root";
$password="";
$dbname="example";
$connect=mysqli_connect($host,$username,$password);
if(!$connect){
    die("issue in the connection");
}
$sql="INSERT INTO students(name,batchcode,phone,password,email) values 
('abdul rehman','2109G3','0900-000000','aptech','abdulrehman@abc.com');";
#$sql="SELECT * from tb_users";
mysqli_select_db($connect,$dbname);
#$result=mysqli_query($connect,$sql);
if(!mysqli_query($connect,$sql)){
    die("could not insert data".mysqli_error($connect));
}
#echo print_r(mysqli_fetch_array($result));
mysqli_close($connect);
?>