var root = document.querySelector(':root');
var rootStyle = getComputedStyle(root);
var globalThemes = Array();
//r.style.setProperty('--blue', 'lightblue');
//var rs = getComputedStyle(r);

var colors = Array(0x004D73, 0xFF8C00, 0xC0C0C0, 0x808080, 0xc6d3a3, 0x6200ee, 0x3700b3, 0x03dac6, 0x018786);

class themetype {
    constructor(name, id = '0000') {
        this.name = name;
        this.id = id;
    }

    setProp(data0, data1, data2, data3, data4, data5, data6, data7, data8) {
        this.color0 = data0;
        this.color1 = data1;
        this.color2 = data2;
        this.color3 = data3;
        this.color4 = data4;
        this.color5 = data5;
        this.color6 = data6;
        this.color7 = data7;
        this.color8 = data8;
    }
    getProp() {
        return [this.color0, this.color1, this.color2, this.color3, this.color4, this.color5, this.color6, this.color7, this.color8];
    }

    getId() {
        return this.id;
    }
    getName() {
        return this.name;
    }
}

var light = new themetype("Day", '0000');
// light.setProp("#e3e4f7","#ffe29b","#7f49ff","#4d503a","#9bffe2","#e29bff");   //light
light.setProp("#e3d4ff","#c6aaff","#aa80ff","#8e55ff","#722aff","#bbfffa"); 
var dark = new themetype("Night", '0000');
dark.setProp("#737373","#8c8c8c","#a6a6a6","#bfbfbf","#d9d9d9","#f2f2f2",);  //dark
var sunrise = new themetype("Sunrise", "0000");
sunrise.setProp("#141b2b","#242d49","#384358","#ffa586","#b51a2b","#52172b");///red
var seasunset = new themetype("Seasunset", "0000");
seasunset.setProp("#06142e","#1b3358","#473e66","#bd83b8","#f5d7db","#f1916d"); //light-orange
var deepOcean = new themetype("Deepocean", "0000");
deepOcean.setProp("#05161a","#072e33","#0c7075","#0f989c","#6da5c0","#294d61"); ///greenish
var forestview = new themetype("Forestview", "0000");
forestview.setProp("#190019","#2b124c","#522b5b","#854f6c","#dfb6b2","#fbe4d8"); //brown
var twilight = new themetype("Twilight", "0000");
twilight.setProp("#1d1a39","#451952","#662549","#ae445a","#f39f5a","#e8bcb9");

globalThemes = [light, dark, sunrise, seasunset, deepOcean, forestview, twilight];

themediv.addEventListener("click", () => { changeTheme(); });

var themeIndex = 4;

function showThemes() {
    let theContainer = document.createElement("DIV");
    theContainer.setAttribute("class", "themeTabMini")
    theContainer.style = "background-color:gray;color:white;width:80vw;height:80vh;overflow-x:hidden;border-radius:2%;position:absolute;top:10vh;left:10vw;";
    for (let i = 0; i < globalThemes.length; i++) {
        let theme = globalThemes[i];
        let thisTheme = document.createElement("DIV");
        thisTheme.setAttribute("class", "themeTab");
        thisTheme.setAttribute("id", theme.getName);
        thisTheme.addEventListener("click", () => {
            setTheme(theme);
        }
        );
        if (theme.getId() == userId || theme.getId() == "0000") {
            theContainer.appendChild(thisTheme);
        }
    };
    document.querySelectorAll(".themeTab").style = "width: fit-content;height:70px;background-color:var(--third-color);";
    // alert(document.querySelector("body"));
    document.querySelector("body").appendChild(theContainer);
}

var themeIndex = 4;

changeTheme()


function changeTheme() {
    themeIndex = parseInt(themeIndex);
    if(typeof(themeIndex) !== "number"){
        themeIndex = 0;
        alert("themeIndex assignment failed");
    }
    if (themeIndex >= 7) {
        themeIndex = 0;
    }
    themeIndex = parseInt(themeIndex);
    console.log(themeIndex);
    console.log(globalThemes[themeIndex].getName()+":"+(globalThemes[themeIndex].getName() == "light"));

    if (globalThemes[themeIndex].getName() == "Day") {
        themediv.style.backgroundImage = 'url("/pictures/theme white.png")';

    }
    else if (globalThemes[themeIndex].getName() == "Night") {
        themediv.style.backgroundImage = 'url("/pictures/theme black.png")';
    }
    else {
        themediv.style.backgroundImage = 'url("/pictures/user theme.png")';

    }
    setTheme(globalThemes[themeIndex]);
    themeIndex++;

}


function setTheme(thistheme) {
    let colors = thistheme.getProp();
    root.style.setProperty('--base-color', colors[0]);
    root.style.setProperty('--first-color', colors[1]);
    root.style.setProperty('--second-color', colors[2]);
    root.style.setProperty('--third-color', colors[3]);
    root.style.setProperty('--fourth-color', colors[4]);
    root.style.setProperty('--fifth-color', colors[5]);

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

