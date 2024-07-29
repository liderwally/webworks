<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Web/variables.css">
        <link rel="stylesheet" href="/Web/general.css">
        <title>Registry</title>
    </head>
    <?php

    $dbConnect = false;
    $database = 'myNewDb';
    $dbConnect = mysqli_connect('localhost:3306', 'root', 'mimisijui04390', $database);
    if (!$dbConnect) {
        $dbConnect = mysqli_connect("Localhost", "id19191420_newdb11", "sL3s03!x4{(Z6K7t", "id19191420_mynewdb");
        if (!$dbConnect) {
            die("couldn't connect" . mysqli_error($dbConnect));
        }
    } else {
        $dbConnect = true;
    }

    ?>
    <style>
        .container {
            width: 400px;
            height: fit-content;
            padding: 20px;
            /* padding-bottom:20px; */
            /* background-image:url("/pictures/nature1.jpg");  */
            background-size: cover;
            color: var(---fourth-color);
            background-repeat: no-repeat;
            box-shadow: 1px 1px 1px 2px black;
            background-color: var(--second-color);
            top: calc(50vh - 300px);
            left: calc(50vw - 250px);
            position: relative;
            border-radius: 20px;
            margin-top: 50px;
            transition: 2s;
            border: 6px outset var(--fourth-color);
        }

        form {
            position: relative;
            width: 60%;
            border: 1px inset var(--fourth-color);
            height: fit-content;
            border-radius: 15px;
            margin: auto;
            background-color: var(--base-color);
            box-shadow: inset 1px 1px 1px 2px black;
            padding: 10px;
            transition: 2s;


        }

        form input {
            left: 20%;
            width: 60%;
            height: 30px;
            position: relative;
            background-color: var(--second-color);
            color: var(---fourth-color);
            margin-top: 1%;
            /* mix-blend-mode:darken; */
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px groove var(--fourth-color);
            border-radius: 5px;
            box-shadow: 1px 1px 1px 1px var(--third-color);
            margin-bottom: 10px;
            margin-top: 4px;

        }

        form label {
            font-size: 15px;
            left: 10px;
            position: relative;
            color: var(--third-color);
        }

        #forUserName {
            border-top: none;
            border-left: none;
            border-right: none;
        }

        #forPassword {
            border-top: none;
            border-left: none;
            border-right: none;
        }

        #forSubmit {
            bottom: -5%;
            left: 20%;
            width: 60%;
            height: 30px;
            position: relative;
            background-color: var(--first-color);
            color: var(---fourth-color);
            margin-top: 15%;
            border-radius: 15px;
            margin-bottom: 10px;
            color: var(--second-color);
            cursor: pointer;
            font-weight: 800;
            font-size: 18px;
        }

        #toRegister {
            bottom: -100px;
            width: 200px;
            left: calc(50% - 120px);
            border-radius: 15px;
            background-color: var(--fourth-color);
            color:var(--first-color);
            padding: 20px;
            border: 2px ridge black;
            position: absolute;
            font-weight: bold;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }



        input :hover {
            border-bottom: 2px groove red;
        }

        /* .warnings {
            bottom: -60px;
            right: -6.66%;
            position: absolute;
            color: var(--second-color);
            font-weight: bold;
            height: 0px;
            width: 500px;
        } */

        .tableLabel {
            justify-self: center;
            position: relative;
            color: var(--third-color);
            text-align: center;
        }
    </style>

    <body>
        <div class="hidbar"></div>
        <div class="backpage">
            <canvas class="canvas"></canvas>
        </div>
        <div class="container">

            <h2 class="tableLabel"></h2>
            <form action="" method="post" id="theForm">
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
                    <input type="text" name="userName" id="forUserName" value="1234" onchange="" required>
                    <br>
                </div>
                <label for="passCode">Enter your password:</label>
                <br>
                <input type="password" name="passCode" id="forPassword" value="blahblahtu" onchange="" required>
                <div class="dueConfirm">
                    <label for="confirmCode">Confirm your Password: </label>
                    <br>
                    <input type="password" name="confirmCode" id="forConfirmCode" value="blahblahtu" onchange=""
                        required>
                </div>
                <br>
                <button type="submit" name="Submit" id="forSubmit" onclick="checkUserDetails()"></button>

            </form>
            <div id="toRegister" onclick="formWizard()">I
                don't have an account...</div>
            <!-- 
            <div class="warnings">

            </div> -->
        </div>
    </body>

    <script src="hidbar.js"></script>
    <script src="/Web/themes.js"></script>
    <script src="/Web/liotsbg3.js"></script>
    <script>
        var warnframe = document.createElement("IFRAME");
        warnframe.setAttribute("id", "UserIframe");
        warnframe.setAttribute("name", "t-iframe");
        warnframe.setAttribute("frameborder", "0");
        warnframe.style = "top: 70px;height: 75px;width: 300px;position:relative;border:none;overflow-y:hidden;";
        var regCount = 0;
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
        var tableLabel = document.querySelector(".tableLabel");
        userNameInput.addEventListener("change", checkUserDetails);

        formWizard();


        function formWizard() {
            if (regCount == 1) {
                //alert(theVals);
                tableLabel.innerText = "Register";
                theChanger.innerHTML = "I already have an account...";
                confirmTab.style.display = "block";
                nameTab.style.display = "block";
                userNameTab.style.display = "block";
                submitButton.innerText = "register";
                theForm.action = "registerNew.php";
                regCount = 0;

            }
            else {
                //alert(theVals);
                tableLabel.innerText = "Login";
                theChanger.innerHTML = "I don't have an account...";
                confirmTab.style.display = "none";
                nameTab.style.display = "none";
                userNameTab.style.display = "none";
                submitButton.innerText = "login";
                theForm.action = "loginUser.php";
                regCount = 1;
            }
        }
        function checkUserDetails() {
            //alert(userNameInput.value);
            //theWarning.innerHTML=userNameInput.value;
            checkerInput.value = userNameInput.value;
            //alert(checkerInput.value);
            checkerForm.submit();

        }

    </script>

</html>