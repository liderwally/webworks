<?php

$nam=strVal($_POST["Name"]);
$email=strVal($_POST["userEmail"]);
$num=strVal($_POST["userName"]);
$passCode=strVal($_POST["passCode"]);
$confirm=strVal($_POST["confirmCode"]);
$dbConnected=false;
$database='myNewDb';
$noter = false;
          
$dbConnect= mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$dbConnect){
    $dbConnect=  mysqli_connect("Localhost","newdb11","sL3s03!x4{(Z6K7t","mynewdb");
        if(!$dbConnect){
    die("couldn't connect".mysqli_error());}
}
else{
   $sql='INSERT INTO newTable(Nam,Email,password,ID) VALUES("'.$nam.'","'.$email.'","'.$passCode.'","'.$num.'")';
   echo "<br>";
   //echo $sql;
}
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New</title>
</head>
<style>
  body{
    background:white;
    width:100vw;
    height:100vh;
    padding:auto;
    background-image:url("/pictures/nature1.jpg"); 
    background-size:cover;
    background-repeat:no-repeat;
    color:white;

  }
</style>
<body>
    <div class="hidbar"></div>
    <div class="none">
 <?php         
if(mysqli_query($dbConnect,$sql)===TRUE){
    $noter = true;
}
else{
    die("<br>couldnt connect".mysqli_error($dbConnect));
}
  
  mysqli_close($dbConnect);
?>
    </div>
    
</body>
<script src="/Web/hidbar.js"></script>
<script>
var noter  = "";
noter = <?php echo '"'.$noter.'"'; ?>;
alert(noter);
if(noter){
alert("");
alert("Dear"+<?php echo '"'.$nam.'"';?> +",\n Your details have been recorded successfully.");
window.location.href="login.php";
}
</script>
</html>














<!-- /made by liderdewally11@gmail.com
     //find me at github:github.liderwally
-->