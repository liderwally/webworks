var root = document.querySelector(':root');
var rootStyle = getComputedStyle(root);
//r.style.setProperty('--blue', 'lightblue');
//var rs = getComputedStyle(r);
var colors = Array( 0x004D73 , 0xFF8C00 , 0xC0C0C0 , 0x808080 , 0xc6d3a3, 0x6200ee, 0x3700b3, 0x03dac6, 0x018786);

themediv.addEventListener("click", () => { 
    changeTheme(); 
    // location.reload(); 
 }
);

themediv.addEventListener("dblclick", () => { showThemes() });
var myThemes = Array();
var globalThemes = Array();
changeTheme();

class themeData {
    constructor(name, id = '0000') {
        this.name = name;
        this.id = id;
        this.classify();

    }
    classify() {
        if (this.id == '0000') {
            //append this to globalThemes
        }
        else {
            //append this to myThemes 
        }
    }

    setProp(data0, data1, data2, data3, data4, data5) {
        this.bg0 = data0;
        this.bg1 = data1;
        this.border0 = data2;
        this.border1 = data3;
        this.font0 = data4;
        this.font1 = data5;
    }
    getProp() {

        return [this.name, this.bg0, this.bg1, this.border0, this.border1, this.font0, this.font1];
    }

    getId() {
        return this.id;
    }
}

function showThemes() {
    let theContainer = document.createElement("DIV");
    theContainer.setAttribute("class", "themeTabMini")
    theContainer.style = "background-color:gray;color:white;width:1000px;height:1000px;overflow:x-hidden;border-radius:10px;position:absolute;top:25vh;left:25vw;";
    themediv.appendChild(theContainer);


}


var lightblue = new themeData("lightBlue", '0000').setProp('#004D73', '#FF8C00', '#C0C0C0', '#808080', '#c6d3a3', '#6200ee', '#03dac6');





function changeTheme() {

    lighttheme = !lighttheme;

    if (lighttheme) {
        themediv.style.backgroundImage = 'url("/pictures/theme white.png")';
        console.log("i tried white theme");
    }
    else {
        themediv.style.backgroundImage = 'url("/pictures/theme black.png")';
        console.log("i tried black theme");
    }
    checkTheme(lighttheme);
    //console.log("i tried");
    //alert(themediv.style.backgroundSize);
}


function checkTheme(lighttheme) {
    if (lighttheme) {
        root.style.setProperty('--base-color', '#88b04b');
        root.style.setProperty('--base-font-color', 'black');
        root.style.setProperty('--my-base', '#999900');
        console.log("i tried");
    }
    else {
        root.style.setProperty('--base-color', '#4CAFCB');
        root.style.setProperty('--base-font-color', 'white');
        root.style.setProperty('--my-base', '#4CAF50');

    }

    if (lighttheme != lastTheme) {

        lastTheme = lighttheme;
    }
}



// }
// // Create a function for getting a variable value
// function myFunction_get() {
//   // Get the styles (properties and values) for the root
//   var rs = getComputedStyle(r);
//   // Alert the value of the --blue variable
//   alert("The value of --blue is: " + rs.getPropertyValue('--blue'));
// }

// // Create a function for setting a variable value
// function myFunction_set() {
//   // Set the value of variable --blue to another value (in this case "lightblue")
//   r.style.setProperty('--blue', 'lightblue');
// }

