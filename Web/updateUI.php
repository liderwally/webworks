<?php
$userId = '0';
$userName = '0';
$userData = '';
$eofile = true;
$password = "LiderIoTSpace";
include "./AES/aes.php";

if ($_GET) {
  if ($_GET['command'] === 'set') {
    $userData = $_GET['data'];
    $userDataEncrypted = encrypt($userData, $password);

    if(isset($_GET['userId']) && isset($_GET['userName'])){
      $userId = $_GET['userId'];
      $userName = $_GET['userName'];

      $fileAppender = $userName . $userId;
      $filepath = $fileAppender . ".txt";
      $myfile = fopen($filepath, "w") or die();
      if(isset($myfile) &&  $userDataEncrypted ){
      fwrite($myfile, $userDataEncrypted);
      fclose($myfile);
      }
    }else{
      foreach($_GET as $v => $k){
        echo $v.":".$k;
        echo "<br>";
      }
    }

  } 
  elseif ($_GET['command'] === 'get') {

    if(isset($_GET['userId']) && isset($_GET['userName'])){
    $userId = $_GET['userId'];
    $userName = $_GET['userName'];

    $fileAppender = $userName . $userId;
    $filepath = $fileAppender . ".txt";
    
    $myfile = fopen($filepath, "r+") or die();
    if(isset($myfile) && file_exists($filepath) ){
    $body = fread($myfile, filesize($filepath) + 1);
    $bodyDecrypted = decrypt($body, $password);
    echo $bodyDecrypted;
    fclose($myfile);
    }
    }
    else{
      foreach($_GET as $v => $k){
        echo $v.":".$k;
        echo "<br>";
      }
    }
  }
}

?>