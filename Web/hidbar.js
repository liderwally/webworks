var bigdiv = document.createElement("DIV");
var helpdiv = document.createElement("DIV");
var logdiv = document.createElement("DIV");
var themediv = document.createElement("DIV");
var thebody = document.querySelector(".hidbar");
var viaLogo = "HOME", viaLogo2 = "LiderSpace IoT";
var thebigdivtxt = document.createElement("SPAN");
var nametoggler = true, displayer = false, darktheme = false, lighttheme = true;
var colorcounter = 0;
var bodyblue = 0, bodygreen = 255, bodyred = 0, divspacing = 175, divwidth = 150;
var bigdivcss = "width:" + divwidth + "px;height:15px;position:absolute;cursor:pointer;bottom:0px;background-color:#fff5;color:var(--third-color);padding:10px;";
var bodycss0 = " left: 5%; width:90%; z-index: 200; height:50px; border-radius: 15px;";
var thedivs = document.getElementsByClassName("thediv");
var bodydiv  = document.createElement("DIV");
var lastTheme;

bigdivcss = bigdivcss + "text-align:center;transition:1s ease-in;top: 20px;backdrop-filter: blur(3px);-webkit-backdrop-filter: blur(3px);";
thebigdivtxt.innerText = viaLogo;
helpdiv.innerText = "HELP";
logdiv.innerText = "LOG-IN";
bigdiv.appendChild(thebigdivtxt);
bigdiv.setAttribute("class", "thediv");
logdiv.setAttribute("class", "thediv");
themediv.setAttribute("class", "thediv");
helpdiv.setAttribute("class", "thediv");
bigdiv.style = "left:calc(50vw - "+ divwidth / 2 +"px);mix-blend-mode:multiply; background-repeat:no-repeat;background-size:100% 100%;" + bigdivcss;
helpdiv.style = "left:calc(50vw + " + divspacing * 3 + "px); background-repeat:no-repeat;background-size:100% 100%;" + bigdivcss;
logdiv.style = "left:calc(50vw - " + divspacing * 1 + "px); background-repeat:no-repeat;background-size:100% 100%;" + bigdivcss;
themediv.style = "left:calc(50vw - " + divspacing * 2 + "px); background-repeat:no-repeat;background-size:100% 100%;" + bigdivcss;
themediv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
bigdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
helpdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
logdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
themediv.style.borderRadius = "50%";
logdiv.style.borderRadius = "15px";
helpdiv.style.borderRadius = "15px";
bigdiv.style.borderRadius = "15px";
themediv.style.width = "20px";

thebody.appendChild(helpdiv);
thebody.appendChild(bigdiv);
thebody.appendChild(logdiv);
thebody.appendChild(themediv);



thebody.style = bodycss0 + "display:block;position: absolute; top: 10px;";
thebody.addEventListener("click", () => { playbigdiv(); displayer == true; setTimeout(() => { unplaybigdiv(); displayer == false; }, 5000); });
bigdiv.addEventListener("click", () => { window.location.href = "/Web/Home.php"; });
logdiv.addEventListener("click", () => { window.location.href = "/Web/login.php"; });
helpdiv.addEventListener("click", () => { window.location.href = "/Web/Help.php"; });

thebody.addEventListener("mouseover", () => {
    if (displayer == true) {
        playbigdiv();
    }
}
);



function divmouseover(thes) {
    thes.style.transform = "scale(1.1)";
}
function divmouseout(thes) {
    thes.style.transform = "scale(1)";
    
}

for (let i = 0; i < thedivs.length; i++) {
    let element = thedivs[i];
    element.addEventListener("mouseover", () => { divmouseover(element);});
    element.addEventListener("mouseout", () => { divmouseout(element);});
    
}



setInterval(bgchange, 400);
playbigdiv();


if (screen.availWidth < 640) {
    alert(screen.availWidth);
    divspacing = 100;
    divwidth = 100;
    logdiv.style.width = divwidth + "px";
    bigdiv.style.width = divwidth + "px";
    helpdiv.style.width = divwidth + "px";
}


function bgchange() {
    if (bodyred >= 250) { bodyred = 0; }
    if (bodyblue >= 250) { bodyblue = 0; }
    if (bodygreen >= 250) { bodygreen = 0; }
    switch (colorcounter % 3) {
        case 0: bodyred += 1; break;
        case 1: bodygreen += 2; break;
        case 2: bodyblue += 3; break;

    }
    colorcounter += 1;
    thebody.style.backgroundColor = "rgb(" + bodyred + "," + bodygreen + "," + bodyblue + ")";

}



function playbigdiv() {
    thebody.style.top = "-10px";
    setTimeout(() => { logdiv.style.top = "60px"; }, 150);
    setTimeout(() => { helpdiv.style.top = "60px"; }, 300);
    setTimeout(() => { themediv.style.top = "60px"; }, 450);
    setTimeout(() => { bigdiv.style.top = "60px"; }, 450);
    logdiv.style.left = "calc(50vw - " + divwidth / 2 + "px - " + divspacing + "px)";
    helpdiv.style.left = "calc(50vw - " + divwidth / 2 + "px + " + divspacing + "px)";
    themediv.style.left = "calc(50vw - " + divspacing * 2 + "px)";

}

function unplaybigdiv() {
    thebody.style.top = "-25px";
    setTimeout(() => { logdiv.style.top = "-100px"; }, 150);
    setTimeout(() => { helpdiv.style.top = "-100px"; }, 300);
    setTimeout(() => { themediv.style.top = "-100px"; }, 450);
    setTimeout(() => { bigdiv.style.top = "-100px"; }, 450);


}

setInterval(changer, 8000);

function changer() {
    if (nametoggler) {
        thebigdivtxt.innerText = viaLogo;
    } else {
        thebigdivtxt.innerText = viaLogo2;
    }
    nametoggler = !nametoggler;
}



















//made by liderdewally11@gmail.com
//find me at github:github.liderwally
