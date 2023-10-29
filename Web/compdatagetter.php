<?php
if ($_GET) {
    $sep = $_GET["Sep"];
} else {
    $sep = " ";
}
$Val0="";
$Val1="";
$Val2="";
$Val3="";
$database = 'myNewDb';
$conn = mysqli_connect('localhost:3306', 'root', 'mimisijui04390', $database);
if (!$conn) {
    $conn = mysqli_connect("Localhost", "id19191420_newdb11", "sL3s03!x4{(Z6K7t", "id19191420_mynewdb");
    if (!$conn) {
        die("couldn't connect" . mysqli_error($conn));
    }
} else {
    // echo 'SELECT * FROM walDevices WHERE ID='.$_GET["Port"].' AND UsId='.$_GET["UsId"].'';
    //$colora=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1112');
    $row = mysqli_query($conn, 'SELECT * FROM walDevices WHERE ID=' . $_GET["Port"] . ' AND UsId=' . $_GET["UsId"] . '');
    //echo 'select * fron newTable where ID=1112';
    while ($therow = mysqli_fetch_array($row)) {
        $Val0 = $therow['val0'];
        $Val1 = $therow['val1'];
        $Val2 = $therow['val2'];
        $Val3 = $therow['val3'];
    }
}

mysqli_close($conn);

echo implode($sep,[$Val0,$Val1,$Val2,$Val3]);
?>