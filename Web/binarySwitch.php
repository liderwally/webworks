<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: auto;
        height: 200px;
        background-color:rgba(0,0,0,0.4);
        color:black;
    }
    .container{
        width:100px;
        height:100px;
        font-size:20px;
        position: relative;

        
        
    }
    .outcover{
        width:120%;
        height:120%;
        background-color:grey;
        display:block;
        position: relative;
        padding:20px;
        transition:.8s;
        border: 4px ridge #fff8;padding:10px;z-index: 10;
    }
    .incover{
        width:50px;height:50px;float:left;background-color:red;border-radius:50%;transition:0.3s linear;position:absolute;border: 2px ridge #0008;box-shadow: inset 2px 4px 3px 5px #000;z-index: 11;top:0;left:0;text-align:center;line-height:25px;
    }
    #$id1{
        background-color:green;
    }


</style>
<body>
<div class="container" style="">
    <div class="outcover" >
        <div class="incover" onclick="togglebtn();">
        </div>
    </div>
</div>  
  
</body>
<script>

function togglebtn(){
    
    let togcount = this.getAttributeNode("state").value;
    alert(togcount);
    if(togcount==0){
        this.style='background-color:#22fd22;box-shadow:inset -2px -4px 2px 5px #fff8;z-index:11;';
        togcount=1;
        this.innerText = "ON";

    }else{
        this.style='background-color:red;box-shadow:inset 2px 4px 2px 5px #0008;z-index:9;';
        togcount=0;
        this.innerText = "OFF";
    } 
    this.parentElement.setAttributeNode("state").value =togcount;
}

//[<methodtobecalled>,<nametodisplay>,<specificId>, <name>,<details>,<id>,<widows>,<min>,<max>,<steps>]
function createBinSwitch(name,details,id){
let outCover = document.createElement("DIV");
let inCover = document.createElement("DIV");
inCover.setAttribute("state", 0);
let toggler = document.querySelector(".incover");
}




</script>
</html>



       