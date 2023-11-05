<?php
$theEmail = $_POST["userEmail"];
$thePassCode = $_POST["passCode"];
$theName = '';
$theId = '';
$theTerminator = 0;

$sqla = 'select * from newtable where Email="' . $theEmail . '"';
$database = 'myNewDb';
$conn = mysqli_connect('localhost:3306', 'root', 'mimisijui04390', $database);
if (!$conn) {
    $conn = mysqli_connect("Localhost", "id19191420_newdb11", "sL3s03!x4{(Z6K7t", "id19191420_mynewdb");
    if (!$conn) {
        die("couldn't connect" . mysqli_error($dbConnect));
    }
}
if (mysqli_query($conn, $sqla)) {
    $colora = mysqli_query($conn, $sqla);
    while ($thecolora = mysqli_fetch_array($colora)) {
        if ($thecolora['password'] == $thePassCode) {
            $theTerminator = 1;
            $theId = $thecolora['ID'];
            $theName = $thecolora['Nam'];

        } else {
            $theName = "";
            $theId = 0000;
            $theTerminator = 0;
        }
    }
} else {
    die("<br>couldnt connect" . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Web/variables.css">
        <link rel="stylesheet" href="/Web/general.css">
        <title>Login page</title>
    </head>
    <style>
        body{
            display: grid;
            width: 100vw;
            height:100vh;
        }
        .whole {
            width: fit-content;
            height: 50%;
            max-width 500px;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            align-items: center;
            justify-self: center;
            align-self: center;
            position: relative;
            border: 2px groove var(--third-color);
            border-top-left-radius: 100px 100px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 100px 100px;
            border-bottom-right-radius: 10px;
            flex-wrap: wrap;
            align-content: center;
            font-size: 25px;
        }

        .avatarImg {
            border-radius: 45%;
            background-image: url("/pictures/avatar1.png");
            left: calc(50% - 105px);
            top: -105px;
            background-size: cover;
            background-repeat: no-repeat;
            box-shadow: 3px 5px 8px 1px black;
            position: absolute;
            width: 200px;
            height: 200px;
        }

        .inforow {
            position: relative;
            height: 60%;
            top: 30%;
            justify-self: center;
            justify-items: center;
            justify-content: center;
            width: fit-content;
            color: var(--third-color);
            border-radius: 5%;
            display: grid;
            overflow-y: hidden;
        }

        .infotab {
            position: relative;
            height: fit-content;
            text-align: center;
            justify-self: center;
            align-self: center;
            align-items: center;
            width: fit-content;
            max-width: 450px;
            padding: 5px;
            margin: 10px;
            border: 2px solid var(--third-color);
            color: var(--third-color);
            border-radius: 20px;

        }

        #theButton {
            left: calc(50% - 75px);
            width: fit-content;
            border: 2px brown black;
            color: var(--third-color);
            background-color: var(--first-color);
            top: calc(100% + 50px);
            bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            height: fit-content;
            position: absolute;
            cursor: pointer;
        }

        iframe {
            top: calc(50vh);
            left: calc(50vw);
            position: absolute;
        }
    </style>

    <body>
        <div class="hidbar"></div>
        <div class="backpage">
            <canvas class="canvas"></canvas>
        </div>


        <div class="whole">
            <div class="avatarImg"></div>
            <br>
            <div class="inforow">
                <hr>

                <div class="infotab" id="">
                    <?php echo $theName; ?>
                </div>
                <div class="infotab" name="Email" id="">
                    <?php echo $_POST["userEmail"]; ?>
                </div>
                <div class="infotab" name="ID" id="">
                    <?php echo $theId; ?>
                </div>
                <br>
            </div>
            <br>
            <button id="theButton">go to the dashboard...</button>
        </div>
        <iframe src="UniqueLoader.html" class="theIframe" frameborder="0"></iframe>
    </body>
    <script src="/Web/hidbar.js"></script>
    <script src="/Web/themes.js"></script>
    <script src="/Web/liotsbg3.js"></script>
    <script>
        var url = "design.php/?";
        var theBody = document.getElementsByTagName('body');
        var theCard = document.querySelector(".whole");
        var thebutton = document.querySelector("#theButton");
        var divs = document.querySelector(".infotab");
        var theloader = document.querySelector(".theIframe");
        var theTerminator = <?php echo $theTerminator ?>;
        var theName = '<?php echo $theName ?>';
        var theId = '<?php echo $theId ?>';


        thebutton.addEventListener("click", dashboard);

        function dashboard() {
            let miurl = url + "Name=" + theName + "&ID=" + theId;
            window.location.href = miurl;
        }

        if (theTerminator == 0) {
            theCard.style = "display:none;";
            theloader.style = "display:block;";
            setTimeout(redirect, 5000);
        }
        else {
            theCard.style = "display:none;";
            theloader.style = "display:block;";
            setTimeout(loader, 1000);
        }

        function loader() {
            theloader.src = '';
            theCard.style = "display:block;";
        }

        function redirect() {
            alert("you've entered wrong information.");
            alert("You will be redirected to login page...");
            window.location.href = "/web/login.php";
        }

    </script>


</html>