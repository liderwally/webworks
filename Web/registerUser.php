

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
 
 echo '<h2>Welcome</h2>';
 $nam=strVal($_GET["name"]);
 echo $nam; 
 echo "<br>Your email address is:";
 $email=strVal($_GET["email"]);
 echo $email;
 echo "<br>Your number is :";
 $num=strVal($_GET["number"]);
 echo $num;

 $database='myNewDb';
 $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
 if(!$conn){
    die("couldnt connect".mysqli_error());
 }
 else{
 echo '<br>connected to myNewDb already';
 $sql='INSERT INTO newTable(Nam,Num,Email) VALUES("'.$nam .'","'.$num.'","'.$email.'")';

 echo "<br>";
 echo $sql;
}


 if(mysqli_query($conn,$sql)===TRUE){
   echo "<br><br><br>Mr/Mrs :";
   echo $nam;
   echo "<br>Your details have been recorded successfully.";
 }
 else
 {
   die("<br>couldnt connect".mysqli_error($conn));
 }

mysqli_close($conn);
 ?>
</body>
</html>














<!-- /made by liderdewally11@gmail.com
     //find me at github:github.liderwally
-->