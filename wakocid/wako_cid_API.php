<?php 
include "./connection.php";

// if (!empty($_POST)) {
//     echo "post has some values ";
//     foreach ($_POST as $key => $value) {
//         # code...
//         echo "$key : $value";
//     }
//     # code...
// } else {
//     echo "put some values using post ";
//     # code...
// }

$argm = array();
$now = getdate();
$thistime =  $now['year']."/".$now['mon']."/".$now['mday']." ".$now['hours'].":".$now['minutes'].":".$now['seconds'];  // "Y/m/d H:i:s");
// echo $thistime;
if(isset($_POST['comm'])){
    $argm[0] = $_POST['comm'];
}
if(isset($_POST['value1'])){
    $argm[1]  = $_POST['value1'];
}
if(isset($_POST['value2'])){
    $argm[2]  = $_POST['value2'];
}
if(isset($_POST['value3'])){
    $argm[3]  = $_POST['value3'];
}
if(isset($_POST['value4'])){
    $argm[4]  = $_POST['value4'];
}




switch ($argm[0]) {
    case 0:  // doing nothing
        break;
    case 1:  //registering new device
        $id = $argm[1];
        $ipcid = $argm[2];
        $sql = "insert into wakocid values ('".$id."','".$ipcid."','".$thistime."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        break;

    case 2: //updating new ip
        $id = $argm[1];
        $ipcid = $argm[2];
        $sql = "UPDATE  wakocid SET (ipcid = '$ipcid', OnPer = '$thistime') WHERE identifier = '$id' ";
        if ($conn->query($sql) === TRUE) {
            echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        break;
    case 3: //updating online time
        $id = $argm[1];
        $sql = "UPDATE  wakocid SET OnPer = '$thistime' WHERE identifier = '$id' ";

        if ($conn->query($sql) === TRUE) {
            echo "ok";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        break;

    case 4: //getting devices data
        $id = $argm[1];
        $sql = "select * from wakocid where identifier = '$id' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "{\"ipcid\": " . $row["ipcid"]. ", \"OnPer\": " . $row["OnPer"]. "}";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        break;
                
    default:  // no other function supported so far

        break;
}



?>