<?php
 $database='myNewDb';
 $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
 if(!$conn){
    $conn =  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
    if(!$conn){
        die("couldn't connect".mysqli_error());
    }
 }
//  else{
// mysqli_close($conn);
// }
?>