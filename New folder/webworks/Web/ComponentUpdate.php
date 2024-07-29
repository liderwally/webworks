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
               session_start();
               if($_SESSION['val0']===null){
                   $_SESSION['val0']='0';
                   $_SESSION['val1']='0';
                   $_SESSION['val2']='0';
                   $_SESSION['val3']='0';
               }
                $dbtable='walDevices';
                $sqla='update '.$dbtable.' set val0="'.$_GET['Val0'].'", val1="'.$_GET['Val1'].'",val2="'.$_GET['Val2'].'",val3="'.$_GET['Val3'].'" where ID="'.$_GET['Port'].'" and UsId='.$_GET['UserId'].'; ';
                $database='myNewDb';
                        $Conn = mysqli_connect("localhost","newdb11","sL3s03!x4{Z6K7t","mynewdb");
                        $conn= mysqli_connect('localhost:3306','root','mimisijui04390',$database);
                        if(!$conn){die("couldnt connect".mysqli_error());}
                        else{echo '<br>connected to database already';echo "<br>";}
                        if(mysqli_query($conn,$sqla)){
                            echo "<br>Your details have been recorded successfully.";
                            $_SESSION['val0'] = $_GET['Val0'];
                            $_SESSION['val1'] = $_GET['Val1'];
                            $_SESSION['val2'] = $_GET['Val2'];
                            $_SESSION['val3'] = $_GET['Val3'];                           
                            echo '<br>'.$_SESSION['val0'];
                            echo '<br>'.$_SESSION['val1'];
                            echo '<br>'.$_SESSION['val2'];
                            echo '<br>'.$_SESSION['val3'];
                            mysqli_close($conn);                                        
                        }
                        else
                        {
                            die("<br>couldnt connect".mysqli_error($conn));
                        }
                        ?>
    </body>
</html> 