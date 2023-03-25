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
        width:100px;height:100px;border:2px solid black;font-size:20px;position: relative;mix-blend-mode:darken;
        
    }
    .outcover{
        width:60px;top:3%;height:33%;left:3%;border:4px solid grey;background-color:grey;display:block;position: relative;transition:2s;mix-blend-mode:darken;
    }
    .incover{
        width:40%;height:100%;float:left;background-color:green;transition:2s;position:relative;
    }

</style>
<body>
<div class="container" style=""><div class="outcover" ><div class="incover" id="$id" onclick=" if(togcount==0){toggler.style='left:60%;background-color:blue;';outCover.style='background-color:white;';togcount=1;}else{toggler.style='left:0%';outCover.style='background-color:grey;';togcount=0;} "></div></div></div>  
<?php
    if($_GET['id'] === '1112'){
        echo "Get request reached";
    }
?>   
</body>
<script>
var toggler = document.querySelector(".incover");
var outCover = document.querySelector(".outcover");
outCover.onclick = toggle();
var togcount=0;

function toggle(){
    if(togcount==0){toggler.style='left:60%;background-color:blue;';outCover.style='background-color:white;';togcount=1;}else{toggler.style='left:0%';togcount=0;} 
    
}

</script>
</html>



       