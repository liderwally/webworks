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

               $dbtable='walDevices';
               $sqla='update '.$dbtable.' set val0="'.$_POST['Val0'].'", val1="'.$_POST['Val1'].'",val2="'.$_POST['Val2'].'",val3="'.$_POST['Val3'].'" where ID='.$_POST['Port'].' and UsId=1113;';
               //$sqla='update '.$dbtable.' set val0="'.$_POST['Val0'].'" where ID=1113 and UsId=1113; ';
               $database='myNewDb';
               $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
               if(!$conn){
                   $conn =  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
                       if(!$conn){
                   die("couldn't connect".mysqli_error());}
               }
                        else{echo '<br>connected to database already';echo "<br>";}
                        if(mysqli_query($conn,$sqla)){
                            echo "<br>Your details have been recorded successfully.";
                            mysqli_close($conn);                                        
                        }
                        else
                        {
                            die("<br>couldnt connect".mysqli_error($conn));
                        }
                        ?>
    </body>
</html> 