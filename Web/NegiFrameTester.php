<?php
$database='myNewDb';
$conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$conn){
    $conn =  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
        if(!$conn){
    die("couldn't connect".mysqli_error());}
}
 else{
  // echo 'SELECT * FROM walDevices WHERE ID='.$_POST["Port"].' AND UsId='.$_POST["UsId"].'';
 //$colora=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1112');
 $row=mysqli_query($conn,'SELECT * FROM walDevices WHERE ID='.$_POST["Port"].' AND UsId='.$_POST["UsId"].'' );
 //echo 'select * fron newTable where ID=1112';
 while($therow=mysqli_fetch_array($row)){
    $clra=$therow['val0'];
    $clrb=$therow['val1'];
    $clrg=$therow['val2'];
    $clrr=$therow['val3']; 
    }
 }
 
mysqli_close($conn);

echo $clra.''.$_POST["Sep"].''.$clrb.$_POST["Sep"].$clrg.$_POST["Sep"].$clrr.$_POST["Sep"];
   
 ?>