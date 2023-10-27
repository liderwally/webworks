
var lastSelectedDevice;
var lastMethodCall;
var togcount = 0;
var devFormContainer = document.querySelector('.devFormContainer');
var devForm = document.querySelector(".devForm");
var topibar = document.querySelector(".topbar");
var leftibar = document.querySelector(".leftbar");
var rightibar = document.querySelector(".rightbar");
var middleibar = document.querySelector(".middlebar");
var bottomibar = document.querySelector(".bottombar");
var menuEnablebutton = document.querySelector("#button1");
var menuDisablebutton = document.querySelector("#button2");
var containers = document.getElementsByClassName("container");
var thehomeLoader = document.querySelector("#homeLoader");
menuDisablebutton.addEventListener("click", menuDisable);
menuEnablebutton.addEventListener("click", menuEnable);
setTimeout(() => { menuDisable(); }, 1500);

function menuEnable() {
  rightibar.style = 'width:10%;right:10px;';
  // middleibar.style='width:90%;';
  menuDisablebutton.style = 'bottom:-2px;';
  menuEnablebutton.style = 'bottom:-500px;';
  setTimeout(() => { menuDisable(); }, 8000);
}


function menuDisable() {
  rightibar.style = 'width:0;visibility:hidden;right:0px;';
  // middleibar.style='width:100%;';
  menuEnablebutton.style = 'bottom:-2px;';
  menuDisablebutton.style = 'bottom:-500px;';
}

//var formUId  = document.getElementById("theiForm").elements.namedItem("UserId");
// var formId   = document.getElementById("theiForm").elements.namedItem("Port");
var optionsvg = "<svg height='100%' width='90%'><line x1='25%' y1='25%' x2='75%' y2='25%' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='25%' y1='50%' x2='75%' y2='50%' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='25%' y1='75%' x2='75%' y2='75%' style='stroke:rgb(255,255,255);stroke-width:2' /></svg>";
var unoptionsvg = "<svg height='100%' width='90%'><line x1='25%' y1='25%' x2='75%' y2='75%' style='stroke:rgb(255,255,255);stroke-width:2' /><line x1='25%' y1='75%' x2='75%' y2='25%' style='stroke:rgb(255,255,255);stroke-width:2' /></svg>";


function showDevform() {
  //console.log(this);
  // <name>,<details>,<id>,<widows>,<min>,<max>,<steps>
  //alert(this.getAttributeNode("name").value == "true");
  if (this.getAttributeNode("name").value == "true") {

    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "name";
    thelabel.htmlfor = "nameInput";
    theinputfield.name = "nameInput";
    theinputfield.type = "text";
    theinputfield.id = "nameInput";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);


  }
  if (this.getAttributeNode("details").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "details";
    thelabel.htmlfor = "detailsInput";
    theinputfield.name = "detailsInput";
    theinputfield.type = "text";
    theinputfield.id = "detailsInput";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("DIV");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);
  }
  if (this.getAttributeNode("id").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "id(Num[4])";
    thelabel.htmlfor = "idInput";
    theinputfield.name = "idInput";
    theinputfield.id = "idInput";
    theinputfield.type = "number";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);
  }
  if (this.getAttributeNode("windows").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "windows";
    thelabel.htmlfor = "winInput";
    theinputfield.name = "winInput";
    theinputfield.id = "winInput";
    theinputfield.type = "number";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);
  }
  if (this.getAttributeNode("min").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "min";
    thelabel.htmlfor = "minInput";
    theinputfield.name = "minInput";
    theinputfield.id = "minInput";
    theinputfield.type = "number";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);
  }
  if (this.getAttributeNode("max").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "max";
    thelabel.htmlfor = "maxInput";
    theinputfield.name = "maxInput";
    theinputfield.id = "maxInput";
    theinputfield.type = "number";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);
  }
  if (this.getAttributeNode("steps").value == "true") {
    let thelabel = document.createElement("LABEL");
    let theinputfield = document.createElement("INPUT");
    thelabel.innerText = "steps";
    thelabel.htmlfor = "stepsInput";
    theinputfield.name = "stepsInput";
    theinputfield.id = "stepsInput";
    theinputfield.type = "number";
    devForm.appendChild(thelabel);
    devForm.appendChild(theinputfield);
    let brac = document.createElement("BR");
    brac.style = "width:100%;padding:3px;height:3px;";
    devForm.appendChild(brac);

  }
  if (this.getAttributeNode("method").value) {
    alert(this.getAttributeNode("method").value);
    lastMethodCall = this.getAttributeNode("method").value;
  }

  devFormContainer.style.visibility = "visible";
  devForm.style.visibility = "visible";



}


for (let j = 0; j < publicDevices.length; j++) {
  //alert(j);
  let devise = publicDevices[j];
  //  [<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]

  //strings
  let method = devise[0];
  let nametodisplay = devise[1];
  let specificId = devise[2];
  if (specificId == userId || specificId == '0000') {
    let device = document.createElement("DIV");
    device.setAttribute("method", method);
    device.setAttribute("specificId", devise[2]);
    //booleans
    device.setAttribute("name", devise[3]);
    device.setAttribute("details", devise[4]);
    device.setAttribute("id", devise[5]);
    device.setAttribute("windows", devise[6]);
    device.setAttribute("min", devise[7]);
    device.setAttribute("max", devise[8]);
    device.setAttribute("steps", devise[9]);
    device.innerText = nametodisplay;
    
    device.setAttribute("class", "devcompnt");
    device.addEventListener("click", showDevform);
    leftibar.appendChild(device);
  }
}


function createNewDevice() {
  window.location.href = "/Web/devicetool.php";
}
//  [<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]

function createDevice() {
  let variables = Array();
  let thisnameInput;
  if (devForm.children.namedItem("nameInput") != null) {
    thisnameInput = devForm.children.namedItem("nameInput").value;
  }
  if (devForm.children.namedItem("detailsInput") != null) {
    variables.push(devForm.children.namedItem("detailsInput").value);
  }
  if (devForm.children.namedItem("idInput") != null) {
    variables.push(devForm.children.namedItem("idInput").value);
  }
  if (devForm.children.namedItem("windowsInput") != null) {
    variables.push(devForm.children.namedItem("windowsInput").value);
  }
  if (devForm.children.namedItem("minInput") != null) {
    variables.push(devForm.children.namedItem("minInput").value);
  }
  if (devForm.children.namedItem("maxInput") != null) {
    variables.push(devForm.children.namedItem("maxInput").value);
  }
  if (devForm.children.namedItem("stepsInput") != null) {
    variables.push(devForm.children.namedItem("stepsInput").value);
  }
  let varstring = variables.join(", ");
  let functString = "" + lastMethodCall + "('" + thisnameInput + "'," + varstring + ");";
  console.log(functString);
  devForm.innerHTML = null;

  setTimeout(() => {
    devFormContainer.style.visibility = "hidden";
    devForm.style.visibility = "hidden";
    let develmnt = eval(functString);
    addObject(develmnt);
  }, 1000);
}




//((((((((((((((((((((((((((((((((((((DRAGGING))))))))))))))))))))))))))))))))))))
var lastdragX = 0;
var lastdragY = 0;
// newbar.addEventListener("drag",()=>{alert("dragging");});
// newbar.addEventListener("dragend",newposition);
//thebody.addEventListener("",()=>{});
// newbar.innerHTML = "X" + lastdragX + "<br>Y" + lastdragY ;
function newposition() {
  console.log(clientX);
  lastdragX = clientX;
  lastdragY = clientY;
  console.log(clientY)
  newbar.style.top = "" + (lastdragY) + "px";
  newbar.style.left = "" + (lastdragX) + "px";
  newbar.innerHTML = "X" + lastdragX + "<br>Y" + lastdragY;
}



//****************************************************AUTO SAVING******************************************* */

// setInterval(() => {
//   alert("saving...");
//   let body = document.querySelector(".middlebar").innerHTML;
//   //console.log(body);
//   let  id ="<?php echo $userId; ?>" ;
//   let  name = "<?php echo $userName;?>";
//   let data = "/Web/updateUI.php?userId = "+id+"&userName = "+name+"&body="+body;
//   xhttp.open("GET", data, true);
//   xhttp.send();

// }, 60000);

