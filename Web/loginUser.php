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
        .whole {

            top: calc(50vh - 75px);
            left: calc(50vw - 250px);
            height: 220px;
            max-width: 450px;
            background-color: #c6d3a3;
            /*#b6a85b;/*#b6b68c;*/
            align-items: center;
            /* background-color:rgba(0,0,0,1); */
            display: flex;
            position: relative;
            line-height: 100%;
            border: 0.5px groove black;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-top-right-radius: 100px 100px;
            border-bottom-right-radius: 100px 100px;
            opacity:
                <?php echo $theTerminator; ?>
            ;
            flex-wrap: wrap;
            align-content: center;
            font-size: 25px;
        }

        .avatarImg {
            border-radius: 45%;
            background-image: url("/pictures/avatar1.png");
            left: calc(100% - 210px);
            background-size: cover;
            background-repeat: no-repeat;
            box-shadow: 3px 5px 8px 1px black;
            position: absolute;
            top: 10px;
            width: 200px;
            height: 200px;
        }

        .infotab {
            position: relative;
            height: 30px;
            bottom: 1px;
            text-align: left;
            justify-self: center;
            width: 200px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0);
            color: black;
            border: 0 0 2px 0;
            border-radius: 5%;
            overflow: hidden;

        }

        #theButton {
            left: calc(50% - 75px);
            width: fit-content;
            border: 2px brown black;
            top: calc(100% + 50px);
            bottom: 20px;
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
            <div class="infotab" id="">
                <?php echo $theName; ?>
            </div>
            <br>
            <div class="infotab" name="Email" id="">
                <?php echo $_POST["userEmail"]; ?>
            </div>
            <br>
            <div class="infotab" name="ID" id="">
                <?php echo $theId; ?>
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