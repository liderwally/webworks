
<?php
// Database credentials
$host = "localhost:3306";
$dbname = "CO2-conc";
$username = "root";
$password = "mimisijui04390";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>