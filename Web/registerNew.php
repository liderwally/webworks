<?php

$nam=strVal($_POST["name"]);
$email=strVal($_POST["email"]);
$num=strVal($_POST["userName"]);
$passCode=strVal($_POST["passCode"]);
$confirm=strVal($_POST["confirmCode"]);
$dbConnect=false;
$database='myNewDb';
$noter = false;
            
$dbConnect = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$dbConnect){
    die("couldn't connect".mysqli_error());
}
else{
   $dbConnect=true;
   $sql='INSERT INTO newTable(Nam,Email,password,ID) VALUES("'.$nam .'","'.$email.'","'.$passCode.'","'.$num.'")';
   echo "<br>";
   echo $sql;
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
if(mysqli_query($conn,$sql)===TRUE){
    $noter = true;
}
else{
    die("<br>couldnt connect".mysqli_error($conn));
}
  
  mysqli_close($conn);
?>
    </div>
    
</body>
<script src="hidbar.js"></script>
<script>
var noter  = <?php echo $noter;  ?>
if(noter){

alert("")
alert("Dear"+<?echo $nam;?> +",\n Your details have been recorded successfully.");
window.location.href="login.php";
}
</script>
</html>














<!-- /made by liderdewally11@gmail.com
     //find me at github:github.liderwally
-->