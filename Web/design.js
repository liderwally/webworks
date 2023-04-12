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

function typeToObject(name, devtype) {
  if (devtype == 0) { return createBinSwitch(name); }
  else if (devtype == 1) { return createVarSwitch(name); }
  else if (devtype == 2) { return createJustValue(name); }
  else if (devtype == 3) { return createMaptracker(name); }
  else { return none; }
}
function createDevice() {
  addObject(devPort.value, devName.value, typeToObject(devName.value, devtype.value), devDetails.value);
}

var isoptiontabopen = false;

function options(obj) {
  let optiontab = document.createElement("DIV");
  optiontab.setAttribute("class", "optionbars");
  optiontab.style = "width:300px;height:300px;top:calc(50vh-50px);left:calc(50vw - 150px);margin:1px;visibility:visible;";
  optiontab.style.transition = "2s";
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

function addOptions(ob) {
  let frstOpt = document.createElement("DIV");
  let scndOpt = document.createElement("DIV");
  let thrdOpt = document.createElement("DIV");
  let frthOpt = document.createElement("DIV");
  frstOpt.setAttribute("class", "tabOptions");
  scndOpt.setAttribute("class", "tabOptions");
  thrdOpt.setAttribute("class", "tabOptions");
  frthOpt.setAttribute("class", "tabOptions");
  let tabStyle = "padding:2px;position:relative;top-padding:5%;background:white;border:1px solid gray;width:98-%;top:15%;height:15%";
  frstOpt.style = tabStyle;
  scndOpt.style = tabStyle;
  thrdOpt.style = tabStyle;
  frthOpt.style = tabStyle;
  ob.appendChild(frstOpt);
  ob.appendChild(scndOpt);
  ob.appendChild(thrdOpt);
  ob.appendChild(frthOpt);
}

