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
$email = $_GET['email'];
$comment = $_GET['comment'];
// $sqla = 'INSERT INTO CommentLib(Email,Comment) values('.$email.','.$comment.')';
// $dbConnect=false;
// $database='myNewDb';
            
// $dbConnect = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
// if(!$dbConnect){
//     die("couldn't connect".mysqli_error());
// }
// else{
//    $dbConnect=true;
//    if(mysqli_query($conn,$sqla))
// {
// }
ini_set("sendmail_from",$email);
$to = "mgasa.loucat1@gmail.com";
$subject ="Costumer request";
$message = prepare($comment);
$header = "From: ".$email."\r\n";
if(mail($to,$subject,$message, $header)){
    echo "Thank you for your feedback feel free to contact us another time...";
}
else{
    echo 'Sorry,network problems...';
}

function prepare($str){
   $length = strlen($str);
   if( $length > 50){
    $factor = $length % 50;
       #$lastIndex = 0;
    $myNewStr ='';
    for ($i=0; $i <= factor; $i++) { 
     for ($j=0; $j <($i +1 )*50 ; $j++) { 
        $myNewStr.=$str[j];
    }
    $myNewStr.="\r\n";
   }
   if($factor*50 <  $length ){
    for ($k=$factor*50; $k < $length; $k++) { 
        $myNewStr.=$str[j]; 
    }
   }
   }
   else{
    $myNewStr=$str."\r\n";
   }

return $myNewStr;

}
?>

</body>
</html>
<?php