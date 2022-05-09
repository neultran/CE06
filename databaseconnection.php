<?php
$host = "localhost";
$user = "root";
$password ="1550";
$dbname = "id17516230_csis2440
";
$conn = new mysqli($host, $user, $password, $dbname) or die ("could not connect to database server." . mysqli_connect_error($conn));

if ($conn->connect_error == false)
{
  echo "<h2>We connected</h2>";
}
else {
  echo $conn->connect_error;
}
print_r($conn);

?>
