<?php 
 $userId='0';
 $userName='0';
 $eofile = true ;

 include "./aes.php";

 if($_GET){
   $userId=$_GET['userId'];
   $userName=$_GET['userName'];
   $body = $_GET['body'];

 }
 $fileAppender = $userName.$userId ;
 $filepath =$fileAppender.".txt";
 //$fileConnect= fopen($filepath,"x");
 $myfile = fopen($filepath, "w") or die();
 fwrite($myfile,$body);
 fclose($myfile);
?>