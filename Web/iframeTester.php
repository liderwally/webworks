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
if(!$conn){die("couldnt connect".mysqli_error());}
else{echo '<br>connected to '.$dbtable.' already';echo "<br>";
}
?> 
</body>
</html>

