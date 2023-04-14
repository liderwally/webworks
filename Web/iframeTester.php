<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dbtable='walDevices';
$database='myNewDb';
$conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$conn){
    $conn = mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
        if(!$conn){
    die("couldn't connect".mysqli_error());}
}
else{echo '<br>connected to '.$dbtable.' already';echo "<br>";
}
?> 
</body>
</html>

