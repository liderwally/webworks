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
var themeIndex = 0;
var globalThemes = Array();
changeTheme();

class themetype {
    constructor(name, id = '0000') {
        this.name = name;
        this.id = id;
    }

    setProp(data0, data1, data2, data3, data4, data5) {
        this.bg0 = data0;
        this.bg1 = data1;
        this.bg2 = data2;
        this.border0 = data3;
        this.border1 = data4;
        this.border2 = data5
        this.font0 = data6;
        this.font1 = data7;
        this.font2 = data8;
    }
    getProp() {
        return [ this.bg0, this.bg1,this.bg2, this.border0, this.border1,this.border2, this.font0, this.font1, this.font2];
    }

    getId() {
        return this.id;
    }
    getName(){
        return this.name;
    }
}

function showThemes() {
    let theContainer = document.createElement("DIV");
    theContainer.setAttribute("class", "themeTabMini")
    theContainer.style = "background-color:gray;color:white;width:80vw;height:80vh;overflow-x:hidden;border-radius:2%;position:absolute;top:10vh;left:-25vw;";
    themediv.appendChild(theContainer);


}


var light = new themeData("Day",'0000').setProp();   //light
var dark = new themeData("Night",'0000').setProp();  //dark
var sunrise = new themeData("Sunrise","0000").setprop();///red
var seasunset = new themeData("Seasunset","0000").setProp(); //light-orange
var deepOcean = new themeData("Deepocean","0000").setProp(); ///greenish
var forestview = new themeData("Forestview","0000").setProp(); //brown
var twilight = new themeData("Twilight","0000").setProp();



function changeTheme() {
    
    if (lighttheme) {
        themediv.style.backgroundImage = 'url("/pictures/theme white.png")';
    }
    else {
        themediv.style.backgroundImage = 'url("/pictures/theme black.png")';
    }
}

function setTheme(thistheme) {
    let colors = thistheme.getProp();

        root.style.setProperty('--base-color', colors[0] );
        root.style.setProperty('--first-color', colors[1]);
        root.style.setProperty('--second-color', colors[2]);
        root.style.setProperty('---third-color', colors[3]);

        root.style.setProperty('--base-font-color', colors[4]);
        root.style.setProperty('--first-font-color', colors[5]);
        root.style.setProperty('--second-font-color', colors[6]);

        root.style.setProperty('--base-border-color', colors[7]);
        root.style.setProperty('--first-border-color', colors[8]);
        root.style.setProperty('--second-border-color', colors[7]);

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

