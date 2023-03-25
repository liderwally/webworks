<?php 
 $userId='1113';
$userName='Walidi Waziri';
$eofile = true ;
if($_GET){
  $userId=$_GET['ID'];
  $userName=$_GET['Name'];
}
$fileAppender = $userName.$userId ;
$filepath =$fileAppender.".txt";
$fileConnect= fopen($filepath,"r+");
$myfile = fopen($filepath, "r+") or die("Unable to open file!");
while($eofile)
{
    $initstr=fgets($myfile);
    if($initstr==""){$eofile = false ;continue;}
    //echo $initstr;
    $thestr =trim($initstr,">");
    $thestr =trim($initstr,">");
    echo $thestr."<br>";
    $thestrarr = explode("/",$thestr,8);
    // for ($i=0;$i<=5;$i++){
    //      echo $thestrarr[$i]."<br>";
    //     }
    if($thestrarr[1] == "ena"){
        echo "setTimeout(() => {addObject($thestrarr[6],$thestrarr[5],$thestrarr[4],$thestrarr[7]);},100);";

    } 
    echo "<br>";   
}
fclose($myfile);

?>