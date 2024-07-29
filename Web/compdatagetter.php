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

include "connection.php";

if ($conn) {
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