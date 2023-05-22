<?php 

               $dbtable='walDevices';
               $sqla='update '.$dbtable.' set val0="'.$_GET['Val0'].'", val1="'.$_GET['Val1'].'",val2="'.$_GET['Val2'].'",val3="'.$_GET['Val3'].'" where ID='.$_GET['Port'].' and UsId=1113;';
               //$sqla='update '.$dbtable.' set val0="'.$_GET['Val0'].'" where ID=1113 and UsId=1113; ';
               $database='myNewDb';
               $conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
               if(!$conn){
                   $conn =  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
                       if(!$conn){
                   die("couldn't connect".mysqli_error());}
                       }
                        if(mysqli_query($conn,$sqla)){
                            echo 1;
                            mysqli_close($conn);                                        
                        }
                        else
                        {
                            die("<br>couldnt connect".mysqli_error($conn));
                        }
                        ?>