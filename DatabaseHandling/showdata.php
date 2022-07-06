<?php
$username="root";
$dbname="testdata";
$hostname="localhost";
$password="";

$connect=mysqli_connect($hostname,$username,$password);
if(!$connect){
    die("Something went wrong");
}
$sql="SELECT * FROM tb_users";
mysqli_select_db($connect,$dbname);
$result=mysqli_query($connect,$sql);
if(!$result){
    die("Error while selecting users from table".mysqli_error());
}
#echo print_r($result);

while($a=mysqli_fetch_array($result)){
//  echo " User Id : {$a["id"]} <br>".
//        "First Name : {$a["fname"]} <br>".
//        "Last Name : {$a["lname"]} <br>".
//        "Email :    {$a["email"]} <br>".
//        "Password : {$a["password"]} <br>".
//        "--------------------------------- <br>";

echo "<table border=1>
<tr>
<th>Id</th>
<th>Email</th>
</tr>
";

echo "<tr>
<td>".$a["id"]."</td>
<td>".$a["email"]."</td>
</tr>";



echo "</table>";
}

mysqli_close($connect);
?>