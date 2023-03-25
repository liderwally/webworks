function binarySwitchCreate(theId,purpose){

    let new_Dev_Container = middleibar.addChildElement("div");
    new_Dev_Container.ClassName="outCover";
    new_Dev_Container.id= theId;

    let new_input = new_Dev_Container.addChildElement("input");
    new_input.type="range";
    new_input.min=0;
    new_input.max=1;
    new_input.step=1;
    new_input.name=purpose;
    new_input.addEventListener("change",notifier);

}
function notifier(){
    lastSelectedDevice ='' + this.parentElement.id; 
    formId.value = lastSelectedDevice.slice(1,5); 
    upload1(this.value);
}

//element.insertBefore(para,child);