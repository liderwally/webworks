var bigdiv = document.createElement("DIV");
var helpdiv = document.createElement("DIV");
var logdiv = document.createElement("DIV");
var themediv = document.createElement("DIV");
var thebody =  document.querySelector(".hidbar");
var viaLogo = "HOME",viaLogo2="LiderSpace IoT";
var thebigdivtxt = document.createElement("SPAN");
var nametoggler = true,displayer=false,darktheme=false,lighttheme=true; 
var colorcounter = 0 ;
var bodyblue=0,bodygreen=255,bodyred=0,divspacing = 175,divwidth=150;
var bigdivcss = "width:"+divwidth+"px;height:20px;position:absolute;cursor:pointer;bottom:0px;background-color:rgba(255,255,255,0.3);color:black;padding:10px;";
var bodycss0 = "left:5vw;width:90vw;height:7px;z-index:100;";
var thedivs = document.getElementsByClassName("thediv");


bigdivcss=bigdivcss + "text-align:center;border-radius:5%;transition:2s ease;top:20px;backdrop-filter: blur(3px);-webkit-backdrop-filter: blur(3px);";
thebigdivtxt.innerText = viaLogo;
helpdiv.innerText = "HELP";
logdiv.innerText = "LOG-IN";
bigdiv.appendChild(thebigdivtxt);
logdiv.setAttribute("class","thediv");
themediv.setAttribute("class","thediv");
helpdiv.setAttribute("class","thediv");
bigdiv.style="left:calc(50vw - "+divwidth/2+"px);" + bigdivcss;
helpdiv.style = "left:calc(50vw - "+divwidth/2+"px + "+divspacing+"px);" + bigdivcss;
logdiv.style = "left:calc(50vw - "+divwidth/2+"px - "+divspacing+"px);" + bigdivcss;
themediv.style = "left:calc(50vw - "+divspacing*2+"px);" + bigdivcss;
themediv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
bigdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
helpdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
logdiv.style.boxShadow = "2px 2px 10px rgba(0,0,0,0.4)";
themediv.style.borderRadius = "50%";
themediv.style.width="20px";
thebody.appendChild(bigdiv);
thebody.appendChild(helpdiv);
thebody.appendChild(logdiv);
thebody.appendChild(themediv);


thebody.style=bodycss0 + "position:absolute;top:0px;";
thebody.addEventListener("click",()=>{displayer=true;if(displayer){playbigdiv();}});
bigdiv.addEventListener("click",() =>{window.location.href="Home.php";});
logdiv.addEventListener("click",() =>{window.location.href="login.php";});
helpdiv.addEventListener("click",() =>{window.location.href="Help.php";});
themediv.addEventListener("click",()=>{darktheme=!darktheme;lighttheme=!lighttheme;alert(lighttheme);})
//thedivs.addEventListener("mouseover",()=>{alert(this.class)});

setInterval(bgchange,400);
setTimeout(() => {unplaybigdiv();},1000);

if(displayer==true){playbigdiv();}
if(screen.availWidth<640){
    alert(screen.availWidth);
    divspacing=100;
    divwidth=100;
    logdiv.style.width=""+divwidth+"px";
    bigdiv.style.width=""+divwidth+"px";
    helpdiv.style.width=""+divwidth+"px";
}

function divmouseover(thes){
    thes.style.top="30px";
    thes.style.backgroundColor="red";
}

function bgchange(){
    if(bodyred>=250){bodyred=0;}
    if(bodyblue>=250){bodyblue=0;}
    if(bodygreen>=250){bodygreen=0;}
    switch(colorcounter%3){
      case 0:bodyred+=1;break;
      case 1:bodygreen+=2;break;
      case 2:bodyblue+=3;break;

    }
    colorcounter+=1;
    thebody.style.backgroundColor="rgb("+bodyred+","+bodygreen+","+bodyblue+")";
    
}
function playbigdiv(){
    bigdiv.style.top="10px";
    setTimeout(()=>{logdiv.style.top="10px";},150);
    setTimeout(()=>{helpdiv.style.top="10px";},300);
    setTimeout(()=>{themediv.style.top="10px";},450);
    logdiv.style.left="calc(50vw - "+divwidth/2+"px - "+divspacing+"px)";
    helpdiv.style.left="calc(50vw - "+divwidth/2+"px + "+divspacing+"px)";
    themediv.style.left="calc(50vw - "+divspacing*2+"px)";
    setTimeout(()=>{displayer=false;unplaybigdiv();},8000);

}

function unplaybigdiv(){
    bigdiv.style.top="-100px";
    logdiv.style.left="calc(50vw - "+divwidth/2+"px)";
    helpdiv.style.left="calc(50vw - "+divwidth/2+"px)";
    setTimeout(()=>{logdiv.style.top="-100px";},150);
    setTimeout(()=>{helpdiv.style.top="-100px";},300);
    setTimeout(()=>{themediv.style.top="-100px";},450);
    
}
setInterval(changer,5000);

function changer(){
    if(nametoggler){
        thebigdivtxt.innerText = viaLogo;
    }else{
        thebigdivtxt.innerText = viaLogo2;
    }
    nametoggler=!nametoggler;
}






















//made by liderdewally11@gmail.com
//find me at github:github.liderwally
