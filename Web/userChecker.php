<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userchecker</title>
</head>
<body style="background-color:rgba(0,0,0,0);color:white;">
<?php

if($_GET){
    $userName=$_GET["UserNameTester"];
}
else{
    $userName="";
}
//
$sqla='select password from newtable where ID="'.$userName.'"';
$database='myNewDb';
       
$conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$conn){
    $conn =  mysqli_connect("localhost","newdb11","sL3s03!x4{Z6K7t","mynewdb");
        if(!$conn){
    die("couldn't connect".mysqli_error());}
}
else{
    
}
if(mysqli_query($conn,$sqla))
{
    $colora=mysqli_query($conn,$sqla);
    if(mysqli_fetch_array($colora)){
        $thetxt="User ID is important<br>That User Id ".$userName." is already present..<br>Try again";
        $theCanva = "<div style='width:auto;height:auto;background-color:red;'>".$thetxt."</div>" ;
        echo $theCanva;
        
    }
    else{
        $thetxt= "User ID is important<br>That User ID will suffice";
        $theCanva = "<div style='width:auto;height:auto;background-color:green;'>".$thetxt."</div>" ;
        echo $theCanva;
    }
}
else
{
    
    die("<br>couldnt connect".mysqli_error($conn));
}

?>
</body>
</html>