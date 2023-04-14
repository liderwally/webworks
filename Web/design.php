<?php 
 $userId='0';
 $userName='0';
 $eofile = true ;
 if($_GET){
   $userId=$_GET['ID'];
   $userName=$_GET['Name'];
 }
 $fileAppender = $userName.$userId ;
 $filepath =$fileAppender.".txt";
 //$fileConnect= fopen($filepath,"x");
 $myfile = fopen($filepath, "r+") or die("Unable to open file!");
 
?>
<!DOCtypeId html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/design.css">
    <title>Control Panel</title>
</head>
<body>
    <div class="hidbar"></div>
    <div class="topbar">
        <h1><?php echo $userName;?> </h1> 
        <div class="menuButton" onclick="menuEnable()"  id="button1" >+</div>
        <div class="menuButton" onclick="menuDisable()"  id="button2" >x</div>

      </div>

    <div class="leftbar" id="theLeftBar">
      <div class="formShower" onclick = " leftibar.style = 'height:0%;';"">X</div>
      <div id="configButton" onclick="createDevice()" class = "devConfigInput">Create Device</div> 

      <form action="registerNew.php" method="get" class = "devConfigForm">
        <label for="devName">Device Name :</label>
        <input typeId="text" name="devName" class = "devConfigInput" id="forDevName">
        <br>
        <label for="devIndex">Device Index :</label>
        <input typeId="number" min="0" name="devIndex" class = "devConfigInput" id="forIndex">
        <br>
        <label for="devIndex">Device Windows :</label>
        <input typeId="number" min="1" max="3" name="devWindow" class = "devConfigInput" id="forWindow">
        <br>
        <label for="port">Device Id(important)</label>
        <input typeId="text" name="port" id="forPort" class = "devConfigInput">
        <br>
        <label for="details">Details for Device :</label>
        <input typeId="text" name="details" id="forDetails" class = "devConfigInput">
        <br>
        <label for="max">Max :</label>
        <input typeId="text" name="max" id="forMax" class = "devConfigInput">
        <br>
        <label for="min">Min :</label>
        <input typeId="text" name="min" id="forMin" class = "devConfigInput">
        <br>
        <label for="step">Step By :</label>
        <input typeId="text" name="step" id="forstep" class = "devConfigInput">
        <br>
       


      </form>
    </div>
   
    <div class="rightbar" id="theRightBar">
        <div class="addDevice">Add New Device</div>

<?php 
    
    $devices = fopen("RegedDevices.txt", "r+") or die("Unable to open file!");
    $device_Reg_eofline = false;
    while(!$device_Reg_eofline){
      $singline = fgets($devices);
      if($singline == ""){
        $device_Reg_eofline = true;
        break;
      }
      else{
        $arrline = explode("<>>",$singline);
        echo "<div class=".$arrline[0]." id=".$arrline[1]."  onclick='displayForm(this)'>".$arrline[2]."</div>";
      }
    }
?>
    </div>
    <div class="middlebar">
    </div>
 
 <div class="bottombar">
    <form class="theForm" id="theiForm" method="get" target="theSubmitter" action="/web/ComponentUpdate.php">

        <input typeId="text" name="Val0" id="val0" class="theFormValues" value="0">
        <input typeId="text" name="Val1" id="val1" class="theFormValues" value="0">
        <input typeId="text" name="Val2" id="val2" class="theFormValues" value="0">
        <input typeId="text" name="Val3" id="val3" class="theFormValues" value="0">
        <input typeId="text" name="UserId" id="UserId" class="theFormValues" value="<?php echo $userId;?>">
        <input typeId="text" name="Port" id="deviceId" class="theFormValues" value="0">
        <button typeId="submit"  class="theFormValues" id="theButton">Submit</button>
    </form>
    <iframe src="/Web/iframeTester.php" frameborder="0" class="theSubmit" name="theSubmitter"></iframe>
 </div>
</body>
<script src="BinarySwitch.js"></script>
<script src="hidbar.js"></script>
<script src="design.js"></script>

<script>
 var lastSelectedDevice;
 var togcount    = 0;
 var devForm     = document.querySelector(".devConfigForm");
 var topibar     = document.querySelector(".topbar");
 var leftibar    = document.querySelector(".leftbar");
 var rightibar   = document.querySelector(".rightbar");
 var middleibar  = document.querySelector(".middlebar");
 var bottomibar  = document.querySelector(".bottombar");
 var menuEnablebutton  = document.querySelector("#button1");
 var menuDisablebutton = document.querySelector("#button2");
 var containers        = document.getElementsByClassName("container");  
 var thehomeLoader     = document.querySelector("#homeLoader"); 
 var devName    = document.querySelector("#forDevName");
 var devIndex   = document.querySelector("#forIndex");
 var devPort    = document.querySelector("#forPort");
 var devDetails = document.querySelector("#forDetails");
 var devMax   = document.querySelector("#forMax");
 var devMin   = document.querySelector("#forMin");
 var devStep  = document.querySelector("#forstep");
 var devWin   = document.querySelector("#forWindow");
     menuDisablebutton.addEventListener("click",menuDisable);
     menuEnablebutton.addEventListener("click",menuEnable);


setTimeout(() => {menuDisable();},1000); 
 
<?php 
while($eofile)
{
    $initstr=fgets($myfile);
    if($initstr==""){$eofile = false ;continue;}
    $thestr =trim($initstr,">");
    $thestrarr = explode("/",$thestr);
    if($thestrarr[1] == "ena"){
      $theabout= "'".trim($thestrarr[7])."'";
      $comm ="addObject($thestrarr[6],'".$thestrarr[5]."',typeIdToObject('".$thestrarr[5]."','".$thestrarr[4]."'),$theabout);";
      echo  "setTimeout(() => {";  
      echo $comm;
      echo "},1000);";
    }    
}
echo "     ";
?>

function addObject(port, name, deviceObject, about = "") {

var theContainer = document.createElement("DIV");
var dltButton = document.createElement("DIV");
var theInContainer = document.createElement("DIV");
theContainer.setAttribute("class", name);
theInContainer.setAttribute("id", port);
theInContainer.draggable = "true";
dltButton.setAttribute("id", "deleteBtn");
dltButton.innerHTML = optionsvg;
theInContainer.style = "padding:5px;width:fit-content;height:fit-content;display:flex;color:blue;border:2px solid black;margin:5px;";
dltButton.style = "float:right;top:0;left:calc(100%);width:50px;background-color:rgba(1,1,1,1);cursor:pointer;height:50px;text-align:center;line-height:50px;color:white;position:absolute;top:0;margin:1px; right:0px;";
theContainer.style = "transition:2s;width:fit-content;height:fit-content;border:2px solid black;font-size:20px;position: relative;display:flex; ";
dltButton.addEventListener("click", () => { options(dltButton); });
theContainer.appendChild(theInContainer);
theContainer.appendChild(dltButton);
middleibar.appendChild(theContainer);
var theLabel = document.createElement("LABEL");
theLabel.htmlfor = '' + about;
theLabel.innerText = '' + about + ':';
theInContainer.appendChild(theLabel);
theInContainer.appendChild(deviceObject);
}

function menuEnable(){
  rightibar.style='width:10%;';
  middleibar.style='width:90%;';
  menuDisablebutton.style='bottom:-2px;';
  menuEnablebutton.style='bottom:-500px;';
}

function menuDisable(){
  rightibar.style='width:0;visibility:hidden;';
  middleibar.style='width:100%;';
  menuEnablebutton.style='bottom:-2px;';
  menuDisablebutton.style='bottom:-500px;';
}

var formVal0 = document.getElementById("theiForm").elements.namedItem("Val0");
var formVal1 = document.getElementById("theiForm").elements.namedItem("Val1");
var formVal2 = document.getElementById("theiForm").elements.namedItem("Val2");
var formVal3 = document.getElementById("theiForm").elements.namedItem("Val3");
var theForm  = document.getElementById("theiForm");
var formUId  = document.getElementById("theiForm").elements.namedItem("UserId");
var formId   = document.getElementById("theiForm").elements.namedItem("Port");
var optionsvg = "<svg height='50' width='50'><line x1='15' y1='15' x2='35' y2='15' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='15' y1='25' x2='35' y2='25' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='15' y1='35' x2='35' y2='35' style='stroke:rgb(255,255,255);stroke-width:2' /></svg>";
var unoptionsvg = "<svg height='50' width='50'><line x1='15' y1='15' x2='35' y2='35' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='15' y1='35' x2='35' y2='15' style='stroke:rgb(255,255,255);stroke-width:2' /></svg>";
    

function upload1(val0){
  formVal0.value = ''+val0;
  formVal1.value = ''+0;
  formVal2.value = ''+0;
  formVal3.value = ''+0;
  document.querySelector(".theForm").submit();
}

function upload2(val0,val1){
  formVal0.value = ''+val0;
  formVal1.value = ''+val1;
  formVal2.value = ''+0;
  formVal3.value = ''+0;
  document.querySelector(".theForm").submit();

}

function upload3(val0,val1,val2){
  formVal0.value = ''+val0;
  formVal1.value = ''+val1;
  formVal2.value = ''+val2;
  formVal3.value = ''+0;
  document.querySelector(".theForm").submit();
}

function upload4(val0,val1,val2,val3){
  formVal0.value = ''+val0;
  formVal1.value = ''+val1;
  formVal2.value = ''+val2;
  formVal3.value = ''+val3;
  document.querySelector(".theForm").submit();
}

function uploadData(val0,val1,val2,val3){
  formVal0.value = ''+val0;
  formVal1.value = ''+val1;
  formVal2.value = ''+val2;
  formVal3.value = ''+val3;
  document.querySelector(".theForm").submit();
}

function downloadData(userId,devId){
  return null;
  
}

function displayForm(typeIdob){
 let typeId = typeIdob.id;
 leftibar.style = "height:80%;";
 devName.value = typeIdob.name;
 switch(typeIdob.getAttribute("type")){
  case "range": 
    devMax.value = 255;
    devMin.value = 0;
    devStep.value = 1;
    devIndex.value = 0;
    devWin.value = 1;
    break;

  case "text":
    devIndex.value = 2;
    devWin.value = 1;
    break ;
  
 }


}

function typeIdToObject(name, devtypeId) {
  if (devtypeId == 0) { return createBinSwitch(name); }
  else if (devtypeId == 1) { return createVarSwitch(name); }
  else if (devtypeId == 2) { return createJustValue(name); }
  else if (devtypeId == 3) { return createMaptracker(name); }
  else { return none; }
}

function createDevice() {
  addObject(devPort.value, devName.value, typeIdToObject(devName.value, devtypeId.value), devDetails.value);
}

var isoptiontabopen = false;

function options(obj) {
  let optiontab = document.createElement("DIV");
  optiontab.setAttribute("class", "optionbars");
  optiontab.style = "width:300px;height:300px;top:calc(50vh-50px);left:calc(50vw - 150px);margin:1px;visibility:visible;";
  optiontab.style.transition = "2s";
  let thisObject = obj;
  let thisparent = obj.parentElement;
  let thischild = obj.childElements;
  switch (obj.parentElement.lastElementChild.className == "optionbars") {
    case false:
      isoptiontabopen = !(false && isoptiontabopen);
      obj.innerHTML = unoptionsvg;
      obj.parentElement.appendChild(optiontab);
      addOptions(optiontab);
      break;
    case true:
      isoptiontabopen = !(true && isoptiontabopen);
      obj.innerHTML = optionsvg;
      obj.parentElement.lastElementChild.remove();
      break;
  }
}

function createBinSwitch(name) {
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type", "range");
  theInput.style.cursor = "pointer";
  theInput.name = name;
  theInput.min = "0";
  theInput.max = "1";
  theInput.step = "1";
  theInput.addEventListener("change", () => {lastSelectedDevice = '' + (theInput.parentElement).id; formId.value = lastSelectedDevice; upload1(theInput.value); });
  return theInput; 
 
}
function createVarSwitch(name) {
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type", "range");
  theInput.name = name;
  theInput.min = "1";
  theInput.max = "256";
  theInput.step = "1";
  theInput.addEventListener("change", () => { lastSelectedDevice = '' + (theInput.parentElement).id; formId.value = lastSelectedDevice; upload1(theInput.value); });
  return theInput;
}

function createJustValue(name) {
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type", "text");
  theInput.name = name;
  theInput.addEventListener("change", () => { lastSelectedDevice = '' + (theInput.parentElement).id; formId.value = lastSelectedDevice; upload1(theInput.value); });
  return theInput;
}

function createMaptracker(name) {
  let newElement = document.createElement("IFRAME");
  let mapSpacestyle = " min-width:100px;max-width:80%;min-height:150px;max-height:10%;background:white;border:3px solid black; ";
  newElement.style= mapSpacestyle;
  newElement.setAttribute("src", "www.googlemap.com");
  newElement.setAttribute("name", name);
  let thisdevId = newElement.parentElement.id;
  // let dataList = {"","","",""};
  newElement.addEventListener("hover", () => { setInterval(100, () => { dataList = downloadData( userId, thisdevId) }); });


}

</script>
</html>

<?php 
fclose($myfile);
?>