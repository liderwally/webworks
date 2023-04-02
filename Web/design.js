function addObject(port,name,deviceObject,about=""){

    var theContainer = document.createElement("DIV");
    var dltButton = document.createElement("DIV");
    //var disButton = document.createElement("DIV");
    var theInContainer = document.createElement("DIV");
    theContainer.setAttribute("class",name); 
    theInContainer.setAttribute("id",port);
    theInContainer.draggable = "true";
    dltButton.setAttribute("id","deleteBtn");
    //disButton.setAttribute("id","disableBtn");
    dltButton.innerHTML = optionsvg;
    //disButton.innerHTML = "X";
    theInContainer.style = "padding:5px;width:fit-content;height:fit-content;display:flex;color:blue;border:2px solid black;margin:5px;";
    dltButton.style = "float:right;top:0;left:calc(100%);width:50px;background-color:rgba(1,1,1,1);cursor:pointer;height:50px;text-align:center;line-height:50px;color:white;position:absolute;top:0;margin:1px; right:0px;";
    //disButton.style = "float:right;width:50px;background-color:rgba(1,1,1,1);cursor:pointer;height:50px;text-align:center;line-height:50px;color:white;position:absolute;top:0;margin:1px; right:0px;";
    theContainer.style="transition:2s;width:fit-content;height:fit-content;border:2px solid black;font-size:20px;position: relative;display:flex; ";
    dltButton.addEventListener("click",() =>{options(dltButton);});
    //dltButton.addEventListener("mouseleave",() =>{options(dltButton);});
    theContainer.appendChild(theInContainer);
    theContainer.appendChild(dltButton);
   // theContainer.appendChild(disButton);
    middleibar.appendChild(theContainer);
    var theLabel = document.createElement("LABEL");
    theLabel.htmlfor = '' + about ;
    theLabel.innerText = '' + about + ':';
    theInContainer.appendChild(theLabel);
    theInContainer.appendChild(deviceObject);


    // var theDLabel = document.createElement("LABEL");
    // theDLabel.htmlfor = '' ;
    // theDLabel.innerText = '' + about + ':';
    // theDlabel.style = "color:blue;";
    // theInContainer.appendChild(theDLabel);

}

function typeToObject(name,devtype){
    if(devtype == 0){return createBinSwitch(name);}
      else if(devtype == 1){return createVarSwitch(name);}
      else if(devtype == 2){return createJustValue(name);}
      else if(devtype == 3){return createMaptracker(name);} 
      else{return none;}
}
function createDevice(){
  addObject(devPort.value,devName.value,typeToObject(devName.value,devtype.value),devDetails.value);
}

var isoptiontabopen =false;
function options(obj){
  let optiontab = document.createElement("DIV");
  optiontab.setAttribute("class","optionbars");
  optiontab.style = "width:300px;height:300px;top:calc(50vh-50px);left:calc(50vw - 150px);margin:1px;visibility:visible;";
  optiontab.style.transition="2s";
  let thisObject = obj;
  let thisparent = obj.parentElement;
  let thischild  = obj.childElements;
  switch(obj.parentElement.lastElementChild.className == "optionbars"){
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
  let   frstOpt = document.createElement("DIV");
  let   scndOpt = document.createElement("DIV");
  let   thrdOpt = document.createElement("DIV");
  let   frthOpt = document.createElement("DIV");
  frstOpt.setAttribute("class","tabOptions");
  scndOpt.setAttribute("class","tabOptions");
  thrdOpt.setAttribute("class","tabOptions");
  frthOpt.setAttribute("class","tabOptions");
  let tabStyle="padding:2px;position:relative;top-padding:5%;background:white;border:1px solid gray;width:98-%;top:15%;height:15%";
  frstOpt.style = tabStyle;
  scndOpt.style = tabStyle;
  thrdOpt.style = tabStyle;
  frthOpt.style = tabStyle;
  ob.appendChild(frstOpt);
  ob.appendChild(scndOpt);
  ob.appendChild(thrdOpt);
  ob.appendChild(frthOpt);
}

function createBinSwitch(name,prntElmnt){
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type","range");
  theInput.style.cursor = "pointer";
  theInput.name = name;
  theInput.min = "0";
  theInput.max = "1";
  theInput.step = "1";
  theInput.addEventListener("change",() => { lastSelectedDevice ='' + prntElmnt.id;formId.value = lastSelectedDevice; upload1(theInput.value);  });
  return theInput;
}

function createVarSwitch(name,prntElmnt){
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type","range");
  theInput.name = name;
  theInput.min = "1";
  theInput.max = "256";
  theInput.step = "1";
  theInput.addEventListener("change",() => { lastSelectedDevice ='' + prntElmnt.id;formId.value = lastSelectedDevice; upload1(theInput.value);  });
  return theInput;
}

function createJustValue(name,prntElmnt){
  let theInput = document.createElement("INPUT");
  theInput.setAttribute("type","text");
  theInput.name = name;
  theInput.addEventListener("change",() => { lastSelectedDevice ='' + prntElmnt.id;formId.value = lastSelectedDevice; upload1(theInput.value);  });
  return theInput;
}

function createMaptracker(name,prntElmnt){
 let newElement = document.createElement("IFRAME");
 newElement.setAttribute("src","www.googlemap.com");
 newElement.setAttribute("name",name);
 newElement.addEventListener("hover",()=>{ setInterval(1000,()=>{ downloadData(userId,devId,)});   });


}