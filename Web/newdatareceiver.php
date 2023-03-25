<?php
session_start();
if($_SESSION['justIntensity']===null){
    $_SESSION['justRed']='0';
    $_SESSION['justBlue']='0';
    $_SESSION['justGreen']='0';
    $_SESSION['justIntensity']='0';
}

$sind=1000000;
for($ind=0;$ind<$sind;$ind++){

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="newdatareceiver.php"  method="get">
            <label for="rangeIntensity">light intensity:</label>
            <input type="range" name="rangeIntensity" id="rangedVal" min="0" max="1" step="0.1" value=<?php echo '"'.$_GET['rangeIntensity'].'"'; ?> >
            <br>
            <label for="rangeRed">light red:</label>
            <input type="range" name="rangeRed" id="rangedRed" min="1" max="255" value=<?php echo '"'.$_GET['rangeRed'].'"'; ?> >
            <br>
            <label for="rangeGreen">light green:</label>
            <input type="range" name="rangeGreen" id="rangedGreen" min="1" max="255" value=<?php echo '"'.$_GET['rangeGreen'].'"'; ?> >
            <br>            
            <label for="rangeBlue">light blue:</label>
            <input type="range" name="rangeBlue" id="rangedBlue" min="1" max="255" value=<?php echo '"'.$_GET['rangeBlue'].'"'; ?> >
            <br>
            <input type="submit">
            <br>
            <div style=" background-color:rgba(<?php echo $_GET['rangeRed']; ?>,<?php echo $_GET['rangeGreen']; ?>,<?php echo $_GET['rangeBlue']; ?>,<?php echo $_GET['rangeIntensity']; ?>);">
              <?php 
                $sqla='update newTable set Num="'.$_GET['rangeIntensity'].'" where ID=1112 ';
                $sqlr='update newTable set Num="'.$_GET['rangeRed'].'" where ID=1113 ';
                $sqlg='update newTable set Num="'.$_GET['rangeGreen'].'" where ID=1114 ';
                $sqlb='update newTable set Num="'.$_GET['rangeBlue'].'" where ID=1115 ';

                $database='myNewDb';
            
                        $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
                        if(!$conn){die("couldnt connect".mysqli_error());}
                        else{echo '<br>connected to myNewDb already';echo "<br>";}
                        
                        if(mysqli_query($conn,$sqla) and mysqli_query($conn,$sqlr) and mysqli_query($conn,$sqlg) and mysqli_query($conn,$sqlb))
                        {
                            echo "<br>Your details have been recorded successfully.";
                            $_SESSION['justRed']=$_GET['rangeRed'];
                            $_SESSION['justBlue']=$_GET['rangeBlue'];
                            $_SESSION['justGreen']=$_GET['rangeGreen'];
                            $_SESSION['justIntensity']=$_GET['rangeIntensity'];                           
                            echo '<br>'.$_SESSION['justRed'];
                            echo '<br>'.$_SESSION['justBlue'];
                            echo '<br>'.$_SESSION['justGreen'];
                            echo '<br>'.$_SESSION['justIntensity'];
                            mysqli_close($conn);                                        
                        }
                        else
                        {
                            die("<br>couldnt connect".mysqli_error($conn));
                        }
                        



            


              ?> 
            </div>
        </form>
    
    </body>
</html>
