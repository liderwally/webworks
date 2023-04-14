<?php
 $database='myNewDb';
 $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
 if(!$conn){
     $conn =  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
         if(!$conn){
     die("couldn't connect".mysqli_error());}
 }
 else{
 echo '<br>connected to myNewDb already';
 $colora=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1112');
 $colorr=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1113');
 $colorg=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1114');
 $colorb=mysqli_query($conn,'SELECT * FROM newTable WHERE ID=1115');
 echo "<br>";
 echo 'select * fron newTable where ID=1112';
 while($thecolora=mysqli_fetch_array($colora)){$clra=$thecolora['Num']; }
 while($thecolorr=mysqli_fetch_array($colorr)){$clrr=$thecolorr['Num']; }
 while($thecolorg=mysqli_fetch_array($colorg)){$clrg=$thecolorg['Num']; }
 while($thecolorb=mysqli_fetch_array($colorb)){$clrb=$thecolorb['Num']; }
 }
 
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:rgba(<?php echo $clrr ;?>,<?php echo $clrg ;?>,<?php echo $clrb ;?>,<?php echo $clra ;?>); width:30px; height:30px; border-radius:50%;"></div>
</body>
</html>
<?php 
  //header('refresh:1');
   
 ?>