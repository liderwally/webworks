<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>LiderSpace Virtual Device Creator</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="variables.css">
<link rel="stylesheet" href="general.css">
<link rel="stylesheet" href="liotsbg.css">
<style ></style>

<style>
body{
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  align-content: center;
  justify-content: space-evenly;
  align-items: center;
  width: 100vw;
  height: 100vh;
  font-family: consolas,"courier new",monospace;
  font-size:15px;
}

.Con{
  background-color: var(--second-color);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border: 2px solid black;
  padding: 15px;
  margin-top: 10px;
  width: 98%;
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
}
.top{
  height: 150px;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;


} 


.down{
  height: 10px;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;


}
.mid{
  height: 750px;
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  padding:0;

}
.editor{
  background-color: var(--second-font-color);
  width:49%;
  padding: 0;
  margin-right: 5px;
  font-family: consolas,"courier new",monospace;
  font-size:15px;


}
.Sep{
  width: 5px;
  background-color: antiquewhite;
  margin-left: 5px;
}

.Sep :focus{
  background-color: #28f90335;
  padding:0;
  width:2%;
  border: 2px solid black;
}
.viewer{
  background-color: var(--second-font-color);
  width: 49%;
  margin-left:5px;
  padding: 0;
  overflow-y: scroll;
}
.viewer iframe{
  width: 100%;
  height: 100%;
  padding: 5px;
  border-radius: 10px;
  background-color: azure;
  overflow-y: scroll;
}

#editor-tab{
  color:var(--second-color);
  background-color: var(--base-font-color);
  width: 100%;
  height: 98%;
  margin: 5px;
  border-radius: 10px;
  font-family: consolas,"courier new",monospace;
  font-size:15px;
  overflow-y: scroll;

}
.item{
    background-color: var(--second-color)
}
.item span{
    display: contents;
}

.item :hover span{
    display: none;
}
.bar{
    background-color: rgba(96, 90, 90, 0);
}
</style>
<div class="hidbar"></div>
</head>

<body>
  <div class="backpage">
    <canvas class="canvas"></canvas>
  </div>
  
  <div class="top w3-container Con">
    <div class="w3-bar" style="padding: 5px;margin: 5px;color:rgba(96, 90, 90, 0.685)">
    </div>
    <div class="w3-bar bar">
      <button class="menu w3-button item"><img src="../pictures/icons/settings/settings-25.png"><span class="detText"> menu</span></button>
      <button class="orientation w3-button item" onclick="toggeOrientation()"><img src="../pictures/icons/rotation_cw/rotation_cw-25.png"><span class="detText"> orientation</span></button>
      <button class="save w3-button item"><img src="../pictures/icons/archive/archive-25.png"><span class="detText"> save</span></button>
      <input type="text" name="devicename" id="devicename" placeholder="device name" class="item w3-white"></label>
      <button class="run w3-button w3-right  item"><img src="../pictures/icons/running/running-25.png"><span class="detText"> run</span></button>

    </div>

  </div>

  <div class="mid w3-container Con">

    <div class="editor w3-container tab">
      <textarea autocomplete="off" id="editor-tab" wrap="logical" spellcheck="false" placeholder="<style> </style> <body>  </body> <script> </script>">
      </textarea>
    </div>

    <div class="Sep bar">
    </div>

    <div class="viewer w3-container tab">
      <iframe src="tempo.html" frameborder="0">

      </iframe>
    </div>

  </div>

  <div class="down w3-container Con">
  
  </div>


</body>
<script>
alert("Here you will be able to create a new device of your own desires.\nThough, It is still in development...\nWe are sorry to make you wait.");


var themediv = document.querySelector(".themediv");
var midContainer= document.querySelector(".mid");
var editor = document.querySelector(".editor");
var sepbar = document.querySelector(".Sep");
var viewer = document.querySelector(".viewer");
var orientationValue = true;

</script>
<script src="hidbar.js"></script>
<script src="themes.js"></script>
<script src="liotsbg3.js"></script>

<script>

function toggeOrientation() {
  orientationValue = !orientationValue;
  console.log(orientationValue);
  if(orientationValue){ // vertical
    console.log( "vertical ");
    midContainer.style="height: 750px; display: flex;flex-direction: column;padding: 0;flex-wrap: nowrap;align-content: stretch;justify-content: flex-start;align-items: stretch;";
    editor.style.width = sepbar.style.width = viewer.style.width="99%";
    editor.style.height = viewer.style.height="48%";sepbar.style.height = "1%";

  }else{ // horizontal
    console.log( "horizontal ");
    midContainer.style="height: 750px; display: flex; flex-flow: column;padding: 0px;place-content: stretch flex-start;align-items: stretch;flex-direction: row;flex-wrap: nowrap;align-content: flex-start;justify-content: space-evenly;";
    editor.style.width = viewer.style.width="48%";sepbar.style.width = "1%";
    editor.style.height = sepbar.style.height = viewer.style.height="99%";

  }
  
}



</script>
</html>