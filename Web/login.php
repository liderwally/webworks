<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry</title>
</head>
<?php

$dbConnect=false;
$database='myNewDb';
$dbConnect= mysqli_connect('localhost:3306','root','mimisijui04390',$database);
if(!$dbConnect){
    $dbConnect=  mysqli_connect("Localhost","id19191420_newdb11","sL3s03!x4{(Z6K7t","id19191420_mynewdb");
        if(!$dbConnect){
    die("couldn't connect".mysqli_error($dbConnect));}
}
else{
   $dbConnect=true;
}

?>
<style>
    *{
        transition:2s;
    }
 body{
    background:white;
    width:100vw;
    height:100vh;
    padding:auto;
    background-image:url("/pictures/nature1.jpg"); 
    background-size:cover;
    background-repeat:no-repeat;
    color:white;
 }
 .container{
    width: 400px;
    height:fit-content;
    padding:20px;
    /* padding-bottom:20px; */
    box-shadow:2px 4px 8px 2px black;
    background-color:rgba(0,0,0,0.4);
    top:calc(50vh - 300px);
    left:calc(50vw - 250px);
    position: relative;
    border-radius:5%;
    border:1px groove black;
    margin-top:50px;
 }
 form{
    position: relative;
    width:60%;
    height:fit-content;
    border:1px groove black;
    border-radius:5%;margin:auto;
    background-color:rgba(255,255,255,0.2);
    mix-blend-mode:normal;
    box-shadow:inset 2px 4px 8px 2px black;
    padding: 10px;

 }
input{
    left:20%;
    width:60%;
    height:30px;
    position: relative;
    background-color:rgba(0,0,0,1);
    color:white;
    margin-top:1% ;
    mix-blend-mode:darken;
    border-top:none;
    border-left:none;
    border-right:none;
    border-bottom:2px dotted white;
    border-radius:5%;
    box-shadow:3px 5px 8px 1px black;
    margin-bottom:10px ;
    
}
#forUserName{
    border-top:none;border-left:none;border-right:none;
}
#forPassword{
    border-top:none;border-left:none;border-right:none;
}
#forSubmit{
    border:2px outset grey;
    border-radius:5%;
    bottom:-5%;
    left:20%;
    margin-top:30px;
    margin-bottom:10px;
    background-color:rgba(200,200,200,0.8);
    color:black;
    cursor: pointer;
}
#toRegister{
    bottom:-30px;
    right:33%;
    position:absolute;
    color:black;
    font-weight:bold;
}
label{
    font-size:15px;left:10px;position:relative;color:black;
}
input :focus{
    color:blue;
}
.warnings{
    bottom:-60px;
    right:-6.66%;
    position:absolute;
    color:black;
    font-weight:bold;
    height: 0px;
    width: 500px;
}
</style>
<body>
    <div class="hidbar"></div>
    <div class="container">
        <form action = "" method="post" id="theForm">
            <div class="dueName">
            <br>
            <label for="Name">Write your Name:</label>
            <br>
            <input type="text" name="Name" id="forName" value="John Doe" onchange="" required>
            </div>
            <label for="Email">Enter your Email: </label>
            <br>
            <input type="email" name="userEmail" id="forUserEmail" value="example@corp.com" required>
            <br>
            <div class="dueUserName">
            <label for="userName">Set your UserID(Numbers):</label>
            <br>
            <input type="text" name="userName" id="forUserName" value="johnDoe1234" onchange="" required>
            <br>
            </div>
            <label for="passCode">Enter your password:</label>
            <br>
            <input type="password" name="passCode" id="forPassword" value="blahblahtu" onchange=""  required>
            <div class="dueConfirm">
            <label for="confirmCode">Confirm your Password: </label>
            <br>
            <input type="password" name="confirmCode" id="forConfirmCode" value="blahblahtu" onchange="" required>
            </div>
            <br>
            <input type="submit" name="Submit" id="forSubmit" value="login">

        </form>
        <div  id="toRegister" onclick="if(regCount==0){regCount=1;formWizard(regCount);}else{regCount=0;formWizard(regCount);}">I don't have an account...</div>
        
        <div class="warnings">

        </div>
    </div>
    <form  target="t-iframe" action="userChecker.php" method="get" id="UserCheckerForm" style="background-color:red;height:0%;visibility:hidden;">			
               <input type="text" name="UserNameTester" id="UserNameTester"  value="1113">
               <input type="submit" value="">			
    </form>
    <iframe name="t-iframe" id="UserIframe" src="userChecker.php" style="top: 70px;height: 75px;width: 300px;position:relative;border:none;overflow-y:hidden;" frameborder="0"></iframe>
</body>
<script src="hidbar.js"></script>
<script>
    var regCount=0;
    var theChanger = document.querySelector("#toRegister");
        theChanger.style.cursor = "pointer";
    var confirmTab = document.querySelector(".dueConfirm");
    var passcodeTab = document.querySelector("#forPassword");
    var userNameTab = document.querySelector(".dueUserName");
    var userNameInput = document.querySelector("#forUserName");
    var nameTab = document.querySelector(".dueName");
    var emailTab = document.querySelector("#forUserEmail");
    var submitButton = document.querySelector("#forSubmit");
    var theForm = document.querySelector("#theForm");
    var theWarning = document.querySelector(".warnings");
    var checkerForm = document.querySelector("#UserCheckerForm");
    var checkerInput = document.querySelector("#UserNameTester");
    var userIframe = document.querySelector("#UserIframe");
    userNameInput.addEventListener("change",checkUserName);

    const key = formWizard(regCount);

    function formWizard(theVals) {
        if(theVals==1){
            //alert(theVals);
            theChanger.innerHTML="I already have an account...";
            confirmTab.style="display:block;";
            nameTab.style="display:block;";
            userNameTab.style="display:block;";
            submitButton.value="register";
            theForm.action ="registerNew.php";
            theWarning.style="display:block;";
            userIframe.style= "display:block;"; 
        }
        else{
            //alert(theVals);
            theChanger.innerHTML="I don't have an account...";
            confirmTab.style="display:none;";
            nameTab.style="display:none;";
            userNameTab.style="display:none;"; 
            submitButton.value="login";
            theForm.action ="loginUser.php";  
            theWarning.innerHTML='';
            theWarning.style="display:none;"; 
            userIframe.style= "display:none;";   
        }
    }
    function checkUserName(){
       //alert(userNameInput.value);
      //theWarning.innerHTML=userNameInput.value;
      checkerInput.value=userNameInput.value;
       //alert(checkerInput.value);
       checkerForm.submit();

    }

</script>
</html>