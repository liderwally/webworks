<?php
$userId = '0';
$userName = '0';
$eofile = true;

include "./aes.php";

if ($_GET) {
  $userId = $_GET['ID'];
  $userName = $_GET['Name'];
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Web/variables.css" type="text/css">
    <link rel="stylesheet" href="/Web/general.css">
    <!-- <link rel="stylesheet" href="./design.css" type ="text/css"> -->
    <title>Control Panel</title>
  </head>

  <style>
    .topbar {
      position: absolute;
      width: calc(100% - 35px);
      top: 12px;
      overflow-x: hidden;
      overflow-y: hidden;
      left: 5px;
      padding-left: 20px;
      height: 10vh;
      z-index: 2;
      background-color: var(--first-color);
      color: var(--base-font-color);
      /*#2288ff; c6d3a3;*/
      display: flex;
      border-radius: 10px;
      border: 1px solid var(--third-color);
      backdrop-filter: blur(8px) sepia(5px);
      -webkit-backdrop-filter: blur(8px) sepia(5px);
    }

    .rightbar {
      border-radius: 10px;
      top: calc(10% + 20px);
      z-index: 2;
      margin-top: 0px;
      border: 1px solid var(--third-color);
      border-radius: 10px;
      width: 10%;
      height: calc(100vh - 10% - 20px);
      right: -10px;
      color: var(--first-font-color);
      background-color: var(--first-color);
      display: flex;
      position: absolute;
      transition: 1s;
      display: block;
    }

    .leftbar {
      top: 10%;
      margin-top: 10px;
      z-index: 1;
      left: 5%;
      width: 90%;
      height: 0%;
      transition: 1s;
      border: 1px solid var(--third-color);
      border-radius: 10px;
      background-color: var(--first-color);
      color: var(--first-font-color);
      position: absolute;
      transition: 2s;
      display: table-column;
      overflow-y: hidden;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);


    }

    .middlebar {
      width: calc(100% - 35px);
      left: 5px;
      top: 10%;
      height: calc(75% - 5px);
      /* bottom:0px; */
      color: var(--base-font-color);
      margin-top: 20px;
      padding: 10px;
      border-radius: 10px;
      background-color: var(--first-color);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      position: absolute;
      transition: 1s;
      display: flex;
      /* flex-direction: column; */
      /* column-width:30%;
    column-count:2; */
      /* column-rule: 1px solid lightblue; */
      flex-direction: row;
      overflow-x: hidden;
      overflow-y: clip;
      border: 1px solid var(--third-color);
    }

    .bottombar {
      width: calc(100% - 35px);
      height: calc(10% - 15px);
      left: 5px;
      bottom: 0px;
      margin: 0px;
      padding: 10px;
      border-radius: 10px;
      /* display : none; */
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      position: absolute;
      background-color: var(--first-color);
      color: var(--base-font-color);
      border: 1px solid var(--third-color);
    }

    .userProfile {
      width: 70px;
      height: 70px;
      align-self: center;
      border-radius: 50%;
      background-color: var(--fisrt-color);
      background-image: url("/pictures/avatar1.png");
      position: relative;
      background-size: cover;
      transition: 1s;
      background-repeat: no-repeat;


    }

    .userProfile:hover {
      zoom: 1.2;
    }

    .menuButton {
      text-align: center;
      width: 25px;
      line-height: 25px;
      height: 25px;
      background-color: rgba(1, 166, 1, 0.3);
      color: white;
      border: 2px groove black;
      transition: var(--transition);
      position: absolute;
      z-index: 300;
      justify-content: center;
      border-top-left-radius: 25px;
      cursor: pointer;

    }

    #button1 {
      right: -5px;
      bottom: -500px;
    }

    #button2 {
      right: -5px;
      bottom: -2px;
    }

    #icon {
      left: 5px;
      width: 200px;
      height: 100px;
      padding-top: 5px;
      position: relative;
      overflow: hidden;
    }

    .modDevice {
      width: 100%;
      height: 50px;
      color: white;
      overflow-x: hidden;
      background-color: var(--second-color);
      text-align: center;
      align-items: center;
      line-height: 100%;
      position: relative;
      padding-top: 30px;
      border-bottom: 1px solid white;
      border-radius: 10px;
      cursor: pointer;
    }

    .modDevice:hover {
      color: black;
      background-color: rgba(255, 255, 255, 0.7);

    }

    .option {
      width: 80%;
      height: 50px;
      padding-top: 3px;
      color: white;
      overflow-x: hidden;
      background-color: var(--base-color);
      text-align: center;
      left: 10%;
      line-height: 100%;
      position: relative;
      cursor: pointer;
      border-radius: 10px;
    }

    .outcover {
      width: 100%;
      top: 3%;
      height: 33%;
      background-color: grey;
      display: inline-block;
      position: relative;
      transition: 2s;
    }

    .theSubmit {
      width: 50%;
      background-color: rgba(0, 0, 0, 0.2);
      height: 80%;
      padding-top: 0;
      position: absolute;
      top: 10%;
      right: 0%;
      cursor: pointer;
    }

    #theButton {
      width: 150px;
      height: 70px;
      border-radius: 5px;
      background-color: gray;
      position: relative;
      top: calc(100% - 75px);
      left: calc((100% - 150px) / 2);
      cursor: pointer;

    }


    .formShower {
      padding: 10px;
      margin: 20px;
      width: 20px;
      position: absolute;
      height: 20px;
      background-color: rgba(0, 0, 0, 0.2);
      border: 2px solid white;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
      color: aliceblue;
    }

    .slideSwitch {
      padding: 10px;
      margin: 20px;
      width: fit-content;
      position: relative;
      height: 100px;
      background-color: rgba(0, 0, 0, 0.2);
      border: 2px solid white;
      left: 50px;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
      color: white;
    }

    #configButton {
      justify-self: center;
      position: absolute;
      width: auto;
      background-color: var(--base-color);
      border: 1px solid var(--fifth-color);
      padding: 10px;
      left: 50%;
      bottom: 10%;
      cursor: pointer;
      z-index: 120;
      border-radius: 5%;

    }

    .devConfigInput,
    select {
      position: absolute;
      background-color: rgba(255, 255, 255, 0.7);
      left: 50%;
    }

    .optionbars {
      background-color: var(--sixth-color);
      color: var(--base);
      border-radius: 15%;
      border: 1px solid var(--base-color);
      cursor: pointer;
      text-align: center;
      line-height: 50px;
      position: absolute;
    }


    .devFormContainer {
      position: absolute;
      width: 60%;
      height: fit-content;
      min-height: 300px;
      border: 3px solid var(--fifth-color);
      border-radius: 10px;
      margin: auto;
      background-color: var(--base-color);
      box-shadow: inset 2px 4px 8px 2px black;
      padding: 50px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      top: 15vh;
      left: 20%;
      min-width: 300px;
      justify-items: center;
      z-index: 100;
      visibility: hidden;
      display: block;
    }

    .devForm {
      position: absolute;
      width: 60%;
      top: 20%;
      left: 20%;
      padding: 20px;
      min-height: 150px;
      height: fit-content;
      background-color: var(--base-color);
      display: block;

      visibility: hidden;
    }

    .devForm input {
      justify-self: top;
      align-self: center;
      float: right;
      background-color: var(--fourth-color);
      color: white;
      width: 70%;
      visibility: visible;
      height: 20px;
      align-self: top;
      color: var(--base-color);
      position: relative;
      visibility: inherit;

    }

    .devForm label {
      color: red;
      left: 0px;
      width: 20%;
      padding: 4px;
      float: left;
      height: fit-content;
      justify-self: left;
      position: relative;


    }

    .devcompnt {
      width: fit-content;
      padding: 10px;
      height: 30px;
      background-color: var(--fifth-color);
      position: relative;
      justify-items: center;
      border: 3px solid black;
      border-radius: 10px;
      align-self: center;
      left: calc(50% - 150px);
      margin-top: 10px;
      text-align: center;
      color: var(--base-color);

    }
  </style>

  <body>
    <div class="hidbar"></div>
    <div class="backpage">
            <canvas class="canvas"></canvas>
    </div>
    <div class="topbar">
      <div class="userProfile"></div>
      <h1>
        <?php echo $userName; ?>
      </h1>
      <div class="menuButton" onclick="menuEnable();" id="button1">+</div>
      <div class="menuButton" onclick="menuDisable();" id="button2">x</div>
    </div>

    <div class="leftbar" id="theLeftBar">
      <div class="formShower" onclick="leftibar.style = 'height:0%;z-index:0;';">X</div>
    </div>
    <div class="rightbar" id="theRightBar">
      <div class="modDevice" id="addExistingDev" onclick="leftibar.style = 'height:80%;z-index:100;';">Add new device
      </div>
      <div class="modDevice" id="createNewDev" onclick="createNewDevice()"> Create new device</div>
    </div>

    <div class="middlebar">
    </div>

    <div class="bottombar">
    </div>
    <div class="devFormContainer">
      <form class="devForm" id="theiForm">

      </form>
      <div id="configButton" onclick="createDevice()" class="devConfigInput">Create Device</div>
    </div>
  </body>
  <script>
    var userId = "<?php echo $userId; ?>";

  </script>
  <script src="/Web/hidbar.js"></script>
  <script src="/Web/themes.js"></script>
  <script src="/Web/liotsbg3.js"></script>
  <script src="/Web/devices.js"></script>
  <script src="/Web/design.js"></script>

</html>