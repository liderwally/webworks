<?php
$userId = '0';
$userName = '0';
$userData = '';
$eofile = true;
$password = "LiderIoTSpace";
include "./aes.php";

if ($_GET) {
  if ($_GET['command'] === 'set') {
    $userData = $_GET['data'];
    $userDataEncrypted = encrypt($userData, $password);
    
    $userdetails = explode("$$",$userData)[2];
    
    $userId = explode("<>", $userdetails)[0];
    $userName = explode("<>", $userdetails)[1];
    $fileAppender = $userName . $userId;
    $filepath = $fileAppender . ".txt";
    $myfile = fopen($filepath, "w") or die();
    fwrite($myfile, $userDataEncrypted);
    fclose($myfile);

  } elseif ($_GET['command'] === 'get') {

    $userId = $_GET['userId'];
    $userName = $_GET['userName'];

    $fileAppender = $userName . $userId;
    $filepath = $fileAppender . ".txt";
    $myfile = fopen($filepath, "r") or die();
    $body = fread($myfile, filesize($filepath));
    $bodyDecrypted = decrypt($body, $password);
    echo $bodyDecrypted;
    fclose($myfile);
  }



}

?>