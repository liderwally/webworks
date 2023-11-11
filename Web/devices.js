
var xhttp;
var dataValue0;
var dataValue1;
var dataValue2;
var dataValue3;
var isoptiontabopen = false;

if (window.XMLHttpRequest) {
  // code for modern browsers
  xhttp = new XMLHttpRequest();
} else {
  // code for old IE browsers
  xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

function upload1(id, val0) {
  dataValue0 = '' + val0;
  dataValue1 = '' + 0;
  dataValue2 = '' + 0;
  dataValue3 = '' + 0;
  let data = '/Web/ComponentUpdate.php?Val0=' + dataValue0 + '&Val1' + dataValue1 + '&Val2=' + dataValue2 + '&Val3=' + dataValue3 + '&UserId=' + userId + '&Port=' + id;
  xhttp.open("GET", data, true);
  xhttp.send();
}

function upload2(id, val0, val1) {
  dataValue0 = '' + val0;
  dataValue1 = '' + val1;
  dataValue2 = '' + 0;
  dataValue3 = '' + 0;
  let data = '/Web/ComponentUpdate.php?Val0=' + dataValue0 + '&Val1' + dataValue1 + '&Val2=' + dataValue2 + '&Val3=' + dataValue3 + '&UserId=' + userId + '&Port=' + id;
  xhttp.open("GET", data, true);
  xhttp.send();
}

function upload3(id, val0, val1, val2) {
  dataValue0 = '' + val0;
  dataValue1 = '' + val1;
  dataValue2 = '' + val2;
  dataValue3 = '' + 0;
  let data = '/Web/ComponentUpdate.php?Val0=' + dataValue0 + '&Val1' + dataValue1 + '&Val2=' + dataValue2 + '&Val3=' + dataValue3 + '&UserId=' + userId + '&Port=' + id;
  xhttp.open("GET", data, true);
  xhttp.send();
}

function upload4(id, val0, val1, val2, val3) {
  dataValue0 = '' + val0;
  dataValue1 = '' + val1;
  dataValue2 = '' + val2;
  dataValue3 = '' + val3;
  let data = '/Web/ComponentUpdate.php?Val0=' + dataValue0 + '&Val1' + dataValue1 + '&Val2=' + dataValue2 + '&Val3=' + dataValue3 + '&UserId=' + userId + '&Port=' + id;
  xhttp.open("GET", data, true);
  xhttp.send();
}

function uploadData(id, val0, val1, val2, val3) {
  dataValue0 = '' + val0;
  dataValue1 = '' + val1;
  dataValue2 = '' + val2;
  dataValue3 = '' + val3;
  let data = '/Web/ComponentUpdate.php?Val0=' + dataValue0 + '&Val1' + dataValue1 + '&Val2=' + dataValue2 + '&Val3=' + dataValue3 + '&UserId=' + userId + '&Port=' + id;
  xhttp.open("GET", data, true);
  xhttp.send();
}

function downloadData(devId) {
  let data = '/Web/compdatagetter.php?Sep=>>&UsId=' + userId + '&Port=' + devId;
  xhttp.open("GET", data, true);
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let txt = this.responseText;
      txt = txt.trim();
      let datas = txt.split('>>');
      dataValue0 = '' + datas[0];
      dataValue1 = '' + datas[1];
      dataValue2 = '' + datas[2];
      dataValue3 = '' + datas[3];
      // alert(datas);

    }
  }
}


var publicDevices = Array();
var thisdescriptor;
//publicDevices.push();
// format to enable calling of a device  
//[<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]



//******************************************************************************************************************************* */
//*****************************************                     *************************************************************** */
//****************************************   METHODS & CLASSES   *************************************************************** */
//*****************************************                     *************************************************************** */
//******************************************************************************************************************************* */



function notifier() {
  lastSelectedDevice = '' + this.parentElement.id;
  formId = lastSelectedDevice.slice(1, 5);
  upload1(this);
}

thisdescriptor = ["createBinSwitch", "SlideSwitch", "0000", true, false, true, false, false, false, false];
publicDevices.push(thisdescriptor);

function createBinSwitch(name, id) {
  let incontainer = document.createElement("DIV");
  incontainer.style = "min-width: 100px;width:fit-content;height: 100px;left: 20%;padding: 10px;margin:10px;background-color:var(--second-color);display: flex;border: 2px solid var(--fourth-color);";
  var theswitch = new binary(id = id, name = name, windows = 1).slideSwitch();
  let label = document.createElement("P");
  label.style = "float:right;width:fit-content;height:100% ;padding: 10px;align-items: center;";
  label.innerText = name;
  incontainer.className = "inContainer";
  incontainer.appendChild(label);
  incontainer.appendChild(theswitch);
  return incontainer;

}



thisdescriptor = ['createHSlider', 'sliderH', '0000', true, false, true, false, true, true, true];
publicDevices.push(thisdescriptor);

function createHSlider(name, id, min, max, steps) {
  let slider = new variable(id = id, name = name, windows = 1).sliderH(min, max, steps);
  let incontainer = document.createElement("DIV");
  let label = document.createElement("P");
  let node = document.createElement("P");
  node.innerText = "0";
  incontainer.setAttribute("class", "inContainer");
  label.style = "width: 20%;height:100% ;padding: 10px;align-items: center;";
  incontainer.style = "min-width: 300px;width: fit-content;height: 100px;left: 20%;padding: 10px;margin:10px;background-color:var(--second-color);display: flex;border: 2px solid var(--fourth-color);";
  node.style = "float:left;width: 20%;height:100% ;padding-top: 6%;margin-left:6%;align-items: center;";
  label.innerText = name;
  incontainer.appendChild(label);
  incontainer.appendChild(slider);
  incontainer.appendChild(node);
  return incontainer;
}

thisdescriptor = ["createJustValue", "textField", "0000", true, false, true, false, false, false, false];
publicDevices.push(thisdescriptor);

function createJustValue(name, id) {
  let incontainer = document.createElement("DIV");
  let label = document.createElement("P");
  label.style = "width: 20%;height:100% ;padding: 10px;align-items: center;color:var(--third-color);";
  label.innerText = name;
  incontainer.style = "min-width: 200px;width: 30%;height:fit-content;left: 20%;padding: 10px;margin:10px;background-color:var(--second-color);display: flex;border: 2px solid var(--fourth-color);";
  let y = new variable(id = id, name = name, windows = 1);
  incontainer.className = "textField";
  incontainer.id = id;
  incontainer.appendChild(label);
  incontainer.appendChild(y.textField(name));
  return incontainer;
}


function createMaptracker(name) {
  let incontainer = document.createElement("DIV");
  incontainer.style = "min-width: 300px;width: 30%;height: 100px;left: 20%;padding: 10px;margin:10px;background-color:var(--second-color);display: flex;border: 2px solid var(--fourth-color);";
  let newElement = document.createElement("IFRAME");
  let mapSpacestyle = " min-width: 100px;max-width: 80%;min-height: 150px;max-height: 10%;width: 200px;height: 100px;background: white;border: 3px solid black; ";
  newElement.style = mapSpacestyle;
  newElement.setAttribute("src", "www.googlemap.com");
  newElement.setAttribute("name", name);
  let thisdevId = newElement.parentElement.id;

  newElement.addEventListener("hover", () => { newElement.style.transform = "scale(1.3)"; });

}

//[<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]
thisdescriptor = ["createButton", "latched Button", "0000", true, true, true, false, false, false, false];
publicDevices.push(thisdescriptor);

function createButton(name, details, id) {
  let button = new binary(id = id, name = name, windows = 1).latchedButton();
  let container = document.createElement("DIV");
  let label = document.createElement("P");
  container.setAttribute("class", "inContainer");
  container.setAttribute("id", id);
  container.setAttribute("details", details);
  label.style = "min-width: 50px;width: fit-content;height: 100%;padding: 10px;padding-left: 20px;position: relative;align-items: center;";
  container.style = "min-width: 100px;width: fit-content;height: fit-content;left: 20%;padding: 5px;margin:10px;display:flex;border: 2px solid var(--fourth-color);";
  label.innerText = name;
  container.appendChild(label);
  container.appendChild(button);

  return container;
}

//element.insertBefore(para,child);

/*
**********************************************************************************************************************************************
 ***********************************                                            ***************************************************************
 **********************************   BEGINING OF DEVICES DEFINITION(CLASSES)     ***********************************************************
 ***********************************                                            ***************************************************************
**********************************************************************************************************************************************
*/

class binary {
  constructor(id = 0, name = "", windows = 1) {
    this.name = name;
    this.port = id;
    this.windows = windows;
  }

  slideSwitch() {
    let outslider = document.createElement("DIV");
    let slider = document.createElement("DIV");
    slider.setAttribute("class", "slider");
    outslider.setAttribute("max", 1);
    outslider.setAttribute("min", 0);
    outslider.setAttribute("step", 1);
    outslider.setAttribute("id", "" + this.id);
    outslider.setAttribute("data", 0);
    outslider.setAttribute("class", "outslider");
    outslider.style = "display:relative;width:50px;padding:5px;height:20px;transition:1s;align-self:center;margin: 0px;border: 2px solid blue;border-radius: 50px; margin-right:0px;background-color: rgb(150,150, 150);";
    slider.style = "left:0px;border-radius: 50%;transition:0.5s;background-color: white;position: relative;";
    slider.style.width = outslider.style.height;
    slider.style.height = outslider.style.height;
    outslider.appendChild(slider);
    outslider.addEventListener("click", changeSliderSwitch);
    slider.addEventListener("drag", changeSliderSwitch);
    slider.addEventListener("dragend", changeSliderSwitch);
    slider.draggable = true;
    return outslider;
  }
  toggleSwitch() {

  }
  latchedButton() {
    let outCover = document.createElement("DIV");
    let inCover = document.createElement("DIV");
    inCover.addEventListener("click", togglebtn);
    outCover.setAttribute("state", 0);
    inCover.setAttribute("class", "incover");
    outCover.setAttribute("class", "outcover");
    outCover.setAttribute("id", this.id);
    outCover.setAttribute("name", this.name);
    let incoStyle = "width:100%;height:100%;background-color:red;top:0;left:0;border-radius:50%;transition:0.3s linear;position:relative;box-shadow: inset 2px 4px 3px 5px #000;text-align:center;line-height:35px;";
    let outcoStyle = "width:70px;height:70px;border-radius:50%;background-color:grey;display:block;position: relative;transition:.8s;";
    outCover.style = outcoStyle;
    inCover.style = incoStyle;
    outCover.appendChild(inCover);
    return outCover;
  }

}

class variable {
  constructor(id = 0, name = "", windows = 1) {
    this.name = name;
    this.port = id;
    this.windows = windows;
  }

  textField(name) {
    let theInput = document.createElement("INPUT");
    theInput.setAttribute("type", "text");
    theInput.style = "color:black;width:100px;height:25px;float: right;";
    theInput.name = name;
    theInput.addEventListener("change", () => { lastSelectedDevice = '' + (theInput.parentElement).id; formId = lastSelectedDevice; upload1(theInput); });
    return theInput;
  }

  finiteKnob() {

  }

  infiniteKnob() {

  }

  sliderH(min, max, steps) {

    let outslider = document.createElement("DIV");
    let slider = document.createElement("DIV");
    slider.setAttribute("class", "slider");
    outslider.setAttribute("max", max);
    outslider.setAttribute("min", min);
    outslider.setAttribute("step", steps);
    outslider.setAttribute("id", "" + this.id);
    //alert(outslider.getAttributeNode("max"));
    outslider.setAttribute("class", "outslider");
    outslider.style = "display:relative;width:60%;height: 20px;align-self:center;margin: 0px;border-radius: 8px;border: 2px solid salmon; margin-right:0px;background-color: rgb(231, 218, 210);";
    slider.style = "top: -100%;width: 20px;height: 60px;border-radius: 10px;border:2px solid black;background-color: aquamarine;position: relative;";
    outslider.appendChild(slider);
    outslider.addEventListener("click", sliderHnewpositionchild);
    slider.addEventListener("drag", sliderHnewposition);
    slider.addEventListener("dragend", sliderHnewposition);
    slider.draggable = true;

    return outslider;

  }
  sliderV() {

  }

}

// DIAL SYSTEM - Device Ip Auto Locate system 

class dialStream {
  constructor(opId = '0000') {
    this.opId = opId;
  }
  requestConnection() {

  }
}

class canvas {
  constructor(id = 0, name = "", windows = 1) {
    this.name = name;
    this.port = id;
    this.windows = windows;
  }

  maptracker() {

  }

  threedimensions() {

  }
  animation() {

  }

  graph2D() {

  }

}

class media {
  constructor(id = 0, name = "", windows = 1) {
    this.name = name;
    this.port = id;
    this.windows = windows;
  }
  videoIputUDP() {

  }
  videoIputTCP() {

  }
  videoInputRTSP() {

  }
  audioInputUDP() {

  }
  audioInputTCP() {

  }
  audioInputRTSP() {

  }
  imageFrame() {

  }

}

class indicators extends canvas {
  gauge() {

  }
  speedometer() {

  }
  thermometer() {

  }
  altimeter() {

  }
  gyroscope() {

  }
  dial() {

  }
  ledblue() {

  }
  ledRed() {

  }
  ledGreen() {

  }
  ledYellow() {

  }
  ledCyan() {

  }
  ledMagenta() {

  }
}


class interactive {
  chat() {

  }

  chess() {

  }

  faceChat() {

  }


}

/* 
**************************************************************************************************************************************
***********************************                        *****************************************************************************
***********************************   DEVICES REGISTRER    *****************************************************************************
***********************************                        *****************************************************************************
**************************************************************************************************************************************
*/

function addObject(device, callerStr) {

  let devContainer = document.createElement("DIV");
  let dltButton = document.createElement("DIV");
  let theInContainer = device;
  devContainer.setAttribute("class", "devContainer");
  devContainer.setAttribute("caller", callerStr);
  theInContainer.draggable = "true";
  dltButton.setAttribute("id", "deleteBtn");
  dltButton.innerHTML = optionsvg;
  dltButton.style = "float:right;transition:0.5s ease-in;left:calc(100% + 10px);background-color:var(--base-color);cursor:pointer;height:calc(100%);text-align:center;line-height:50px;color:var(--third-color);position:absolute;top:0;margin:1px;border: 1px solid gray;border-radius:5px;right:0px;z-index:100";
  dltButton.style.height = '50px';
  dltButton.style.width = "50px";
  devContainer.style = "transition:2s;min-width:50px;width:fit-content;height:fit-content;background-color:var(--third-color);border:1px solid var(--fourth-color);border-radius:5px; padding:5px;margin:10px;margin-right: 70px;font-size:20px;position: relative;display:flex; ";
  dltButton.addEventListener("click", options);
  devContainer.appendChild(theInContainer);
  devContainer.appendChild(dltButton);
  middleibar.appendChild(devContainer);

}


function options() {
  let obj = this;
  let optiontab = document.createElement("DIV");
  optiontab.setAttribute("class", "optionbars");
  optiontab.style = "z-index:300;width:300px;height:300px;position:absolute;top:calc(50vh-50px);left: calc(50vw - 300px);margin:1px;visibility:visible;";
  optiontab.style.transition = "1s";
  // let thisObject = obj;
  let thisparent = obj.parentElement;
  // let thischild = obj.childElements;
  switch (thisparent.lastElementChild.className == "optionbars") {
    case false:
      isoptiontabopen = !(false && isoptiontabopen);

      obj.style.borderRadius = "25px";
      obj.style.transform = "rotate(180deg)";
      setTimeout(() => {
        obj.parentElement.appendChild(optiontab);
        obj.innerHTML = unoptionsvg;
      }, 250);
      //addOptions(optiontab);
      obj.style.borderRadius = "5px";
      break;
    case true:
      isoptiontabopen = !(true && isoptiontabopen);
      obj.style.borderRadius = "25px";
      obj.style.transform = "rotate(-180deg)";
      setTimeout(() => {
        obj.parentElement.lastElementChild.remove();
        obj.innerHTML = optionsvg;
      }, 250);
      obj.style.borderRadius = "5px";
      break;
  }

  return;
}

//****************************************************************************************************************************************/
//*******************************                                          **********************************************************************/ 
//*******************************   on start devices initiation function   **********************************************************************/
//*******************************                                          **********************************************************************/
//*****************************************************************************************************************************************/

loadDevices();

function loadDevices() {
  // /Web/updateUI.php?command=get&userId=1114&userName=Wawako
  let dataUrl = "/Web/updateUI.php?command=get&userId=" + userId + "&userName=" + userName;
  console.log(dataUrl);
  xhttp.open("GET", dataUrl, true);
  xhttp.send();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let txt = this.responseText;
      let deviceStr, detailsStr, userSettingsStr;
      txtStr = txt.split("$$");
      deviceStr = "" + txtStr[0];
      detailsStr = "" + txtStr[2];
      userSettingsStr = "" + txtStr[1];

      let details = Array();
      details = detailsStr.split("<>");
      let devices = Array();
      devices = deviceStr.split("<>");
      let settings = Array();
      settings = userSettingsStr.split("<>");

      if (devices.length > 0) {
        for (let j = 0; j < devices.length; j++) {
          let functString = devices[j];
          let elmnt = eval(functString);
          if (elmnt) {
            addObject(elmnt, devices[j]);
          }

        }
      }

      if (settings.length > 0) {
        if (settings[0]) {
          themeIndex = parseInt(settings[0]);
        } else {
          themeIndex = 0;
        }
        changeTheme();
      }
    }
  }
}

//****************************************************************************************************************************************/
//*******************************                                   **********************************************************************/ 
//*******************************     device's related functions    **********************************************************************/
//*******************************                                   **********************************************************************/
//*****************************************************************************************************************************************/

// console.log(window.Date());
function scaler(value, min, max, steps) {
  let stp = steps - 1;
  let change = (max - min) / (steps);
  let values = Array(steps);
  let midvalues = Array(stp);
  for (let i = 0; i < steps + 1; i++) {
    values[i] = min + i * change;
    //alert(values[i] + "");
  }
  for (let i = 0; i < steps; i++) {
    midvalues[i] = (values[i] + values[i + 1]) / 2;
    //alert(midvalues[i] +'');
  }
  if (value <= min || value <= midvalues[0]) {
    return [min, 0];
  }
  if (value >= max) {
    return [max, steps];
  }

  for (let j = 0; j < midvalues.length; j++) {
    //alert("midvalue = " + midvalues[j]);
    if (value <= midvalues[j] && value > values[j]) {
      //alert(value+' < '+midvalues[j]);
      return [values[j], j];
    }
    else if (value > midvalues[j] && value <= values[j + 1] && j < (midvalues.length)) {
      // alert(value+' > '+midvalues[j+1]);
      return [values[j + 1], j + 1];
    }
    else if (value > midvalues[j] && value <= values[j + 1] && j == (midvalues.length)) {
      return [values[j], j];
    }
    else {
      //alert('value = '+value+', max= '+max +'mid = '+values[j+1]);

    }

  }
  alert('scaler fails..');
  return [0, 0];


}


function map(from, fromLow, fromHigh, toLow, toHigh) {
  let toValue = from;
  let mconst = toHigh - ((toHigh - toLow) / (fromHigh - fromLow)) * fromHigh;
  if (from > fromHigh) {
    toValue = fromHigh;
  }
  else if (from < fromLow) {
    toValue = fromLow;
  }

  let value = (((toHigh - toLow) / (fromHigh - fromLow)) * toValue) + mconst;
  //console.log("mapping from:" + from + " to :" + value);

  return value;

}

// updating mouse location
var mouseLocation = {
  clientx: 0,
  clienty: 0
};

window.onmousemove = function(e){
  console.log("mouse moved");
  mouseLocation.clientx = e.clientX;
  mouseLocation.clienty = e.clienty;
}

function sliderHnewposition() {
  let outslider = this.parentElement;
  let thenode = outslider.nextSibling;
  let max = outslider.getAttributeNode("max").value;
  let min = outslider.getAttributeNode("min").value;
  let steps = outslider.getAttributeNode("step").value;
  let bounds = outslider.getBoundingClientRect();


  let minLeft = bounds.x;
  let maxLeft = bounds.width + bounds.x;

  lastdragX = mouseLocation.clientx;
  lastdragY = mouseLocation.clienty;
  //console.log('bounded:'+maxLeft+'>x>'+minLeft+'.x='+lastdragX);


  let lastvaluen = map(lastdragX, minLeft, maxLeft, 0, bounds.width);
  //console.log("result : " + lastvaluen);
  let lastvalue = scaler(lastvaluen, 0, bounds.width, steps)[0];
  realValue = scaler(lastvaluen, 0, bounds.width, steps)[1];
  //alert(lastvalue +':'+realValue);
  realValue = Math.floor(map(realValue, 0, steps, min, max));
  //alert(lastdragX +':'+lastvalue);
  thenode.innerText = realValue;
  outslider.setAttribute("data", realValue);
  this.style.left = "" + lastvalue - 10 + "px";
  //console.log("X" + lastdragX + "<br>Y" + lastdragY);
  //console.log(outslider.getAttributeNode("data"));
}

function sliderHnewpositionchild() {
  let slider = this.firstChild;

  //console.log(slider);
  let max = this.getAttributeNode("max").value;
  let min = this.getAttributeNode("min").value;
  let steps = this.getAttributeNode("step").value;
  //alert(steps);
  //console.log(max + ':' + min + ':' + steps);
  let bounds = this.getBoundingClientRect();
  //console.log(bounds);
  //console.log(bounds.x);
  let minLeft = bounds.x;
  let maxLeft = bounds.width + bounds.x;
  // this.style.top = "" + (lastdragY - 50) + "px";
  lastdragX = mouseLocation.clientx;
  lastdragY = mouseLocation.clienty;
  //console.log('bounded:'+maxLeft+'>x>'+minLeft+'.x='+lastdragX);
  let lastvaluen = map(lastdragX, minLeft, maxLeft, 0, bounds.width);
  //console.log("result : " + lastvaluen);
  lastvalue = scaler(lastvaluen, 0, bounds.width, steps)[0];
  realValue = scaler(lastvaluen, 0, bounds.width, steps)[1];
  //alert(lastvalue +':'+realValue);
  realValue = Math.floor(map(realValue, 0, steps, min, max));
  //alert(lastvaluen +':'+realValue);
  this.nextSibling.innerText = realValue;
  //console.log(this.nextSibling);
  this.setAttribute("data", realValue);
  slider.style.left = "" + lastvalue - 10 + "px";
  // console.log("X" + lastdragX + "<br>Y" + lastdragY);
  //console.log(this.getAttributeNode("data"));
}

function togglebtn() {
  let togcount = this.parentElement.getAttributeNode("state").value;
  if (togcount == 0) {
    this.style.backgroundColor = "#22fd22";
    this.style.boxShadow = "inset 1px 1px 3px 6px #fff8";
    togcount = 1;
    this.innerText = "ON";

  } else {
    this.style.backgroundColor = "red";
    this.style.boxShadow = "inset 2px 4px 3px 4px #0008";
    togcount = 0;
    this.innerText = "OFF";
  }
  this.parentElement.setAttribute("state", togcount);
}

function changeSliderSwitch() {
  let theSlider, theOutslider;
  let approved = false;
  if (this.className == "slider") {
    theSlider = this;
    theOutslider = this.parentElement;
    approved = true;

  }
  else if (this.className == "outslider") {
    theSlider = this.firstChild;
    theOutslider = this;
    approved = true;

  }
  else {
    approved = false;
  }
  if (approved) {
    let lastdataValue = theOutslider.getAttributeNode("data").value;
    if (lastdataValue == 0) {
      theSlider.style.left = "calc(" + theOutslider.style.width + " - " + theSlider.style.width + ")";
      theOutslider.style.backgroundColor = "blue";
      theSlider.style.backgroundColor = " rgb(150,150, 150)";
      lastdataValue = 1;
    }
    else if (lastdataValue == 1) {
      theSlider.style.left = "0%";
      theOutslider.style.backgroundColor = "rgb(150,150, 150)";
      theSlider.style.backgroundColor = "blue";
      lastdataValue = 0;
    }
    theOutslider.setAttribute("data", lastdataValue);
  }


}
