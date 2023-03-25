<?php
$theEmail=$_POST["userEmail"];
$thePassCode=$_POST["passCode"];
$theName;
$theId;
$theTerminator=0;

$sqla='select * from newtable where Email="'.$theEmail.'"';
$database='myNewDb';
            
$conn = mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$conn){
    die("couldn't connect".mysqli_error());
}
if(mysqli_query($conn,$sqla))
{
    $colora=mysqli_query($conn,$sqla);
    while($thecolora=mysqli_fetch_array($colora)){
        if($thecolora['password']==$thePassCode){
            $theTerminator=1;
            $theId = $thecolora['ID'];
            $theName = $thecolora['Nam'];

       }
       else{
           
       }
    }
}
else
{
    die("<br>couldnt connect".mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<style>
    body{
        background-image:url("/pictures/nature1.jpg"); 
        background-size:cover;
        background-repeat:no-repeat;
        height: 100vh;
        width: 100vw;
    }
    .whole{
        
        top:calc(50vh - 75px);
        left:calc(50vw - 125px);
        height: 150px;
        max-width: 250px;
        background-color:rgba(0,0,0,0.2);
        display: block;
        position: relative;
        border:0.5px groove black;
        border-top-left-radius:25%;
        /* border-bottom-left-radius:25%; */
        border-top-right-radius:25%;
        /* border-bottom-right-radius:25%; */
        opacity: <?php echo $theTerminator;?>;
    }
    .avatarImg{
        border-radius:45%;
        background-image:url("/pictures/avatar1.png");
        left:calc(50% - 100px );
        background-size:cover;
        background-repeat:no-repeat;
        position:absolute;
        top: -150px;
        width: 200px;
        height:200px;
    }
    form{
        width:100%;
        height: 100%;
        position: absolute;
        background-color:rgba(0,0,0,0);

    }
    input{
        height: 30px;
        bottom:1px ;
        text-align:center;
        justify-self: u;
        margin-left:auto;
        margin-right:auto;
        width :100%;
        background-color:rgba(0,0,0,0);
        color:white;
        position:relative;
        border:none;
        border-radius:5%;
        mix-blend-mode:exclusion;

    }
    #theButton{
        left:calc(50% - 75px);
        width:fit-content;
        border: 2px brown black;
        top:calc(100% + 50px) ;
        bottom: 20px;
        position: absolute;
        cursor: pointer;
    }
    iframe{
        top: calc(50vh - 50%);
        left:calc(50vw - 50%);
        position: absolute;
    }

</style>
<body>
<div class="hidbar"></div>
<div  class="whole">
<div class="avatarImg"></div>
<form action="design.php" method="get">
    <br>
    <input type="text" name="Name" id="" value="<?php echo $theName; ?>">
    <br>
    <input type="text" name="Email" id="" value="<?php echo $_POST["userEmail"]; ?>">
    <br>
    <input type="text" name="ID" id="" value="<?php echo $theId; ?>">
    <br>
    <input type="submit" name="" id="theButton" value="go to the dashboard...">
    <br>
</form>

    
     

</div>
<iframe src="UniqueLoader.html" class="theIframe" frameborder="0" ></iframe>
</body>
<script>
    var theBody = document.getElementsByTagName('body');
    var theCard = document.querySelector(".whole");
    var spans = document.getElementsByTagName('span');
    var theloader = document.querySelector(".theIframe");
    var theTerminator=<?php echo  $theTerminator?> ; 
   if(theTerminator==0){
    theCard.style = "display:none;";
    theloader.style="display:block;";
    setTimeout(redirect, 3000);
   }
   else{
    theCard.style = "display:none;";
    theloader.style="display:block;";
   setTimeout(loader, 6000);
   }
   function loader(){
    theloader.src='';
    theCard.style="display:block;";
    
   }
   function redirect(){
      alert("you've entered wrong information.");
      alert("You will be redirected to login page...");
      window.location.href="login.php";
   }
   
</script>
<script src="hidbar.js"></script>

</html>