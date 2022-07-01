
<?php
$host="localhost";
$username="root";
$password="";
$db="testdata";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_users (fname, lname, email,password)
VALUES ('John', 'Doe', 'john@example.com','abc123');";
$sql .= "INSERT INTO tb_users (firstname, lastname, email,password)
VALUES ('Mary', 'Moe', 'mary@example.com','abc123');";
$sql .= "INSERT INTO tb_users (firstname, lastname, email,password)
VALUES ('Julie', 'Dooley', 'julie@example.com','abc123')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>