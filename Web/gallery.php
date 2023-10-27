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
    background: linear-gradient(to top right,#004D73 0%, #004D78 100%);
        background-size:cover;
        width:99%;
        height:100vh;
        background-repeat:no-repeat;
    }
    .container{
        padding: auto;background-color:rgba(0,0,0,0.4);
        width: 94%;
        top:3%;
        left:3%;
        height: 94%;
        border: 2px solid black;
        display:inline-block;
        position:relative;
        border-radius:10px;
        
    }

    .tab{
        left:25%;
        top:20%;
        border: 2px solid black;
        width: 50%;transition:2s;
        height:60%;position:absolute;
        box-shadow:0 0 5px 4px black;
        border-radius:15px;
        background-size:cover;
        background-repeat:no-repeat;
        text-indent: 30%;
}

#t0{
    background-image:url("/pictures/hotel.jpg");

}

#t1{
    background-image:url("/pictures/nature4.jpg");
    

}

#t2{
    background-image:url("/pictures/nature3.jpg"); 
   
}

.details{
    background-color:rgba(0,0,0,0.6);
    width:30%;color:white;
    position:relative;
    text-align:center;
    min-height:80%;
    max-height:90%;
    top:5%;
    float:right;
    right:5%;
    line-height:100%;
    padding:20px;
    border-radius : 8px;



    
  }


</style>
<body>
    <div class="hidbar"></div>
    <div class="container">
        <div class="tab" id="t0">
            <div class="details">Lorem 0 ipsum dolor sit amet consectetur adipisicing elit. Quos esse...</div>
        </div>
        <div class="tab" id="t1">
            <div class="details">Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. Quos esse...</div>
        </div>
        <div class="tab" id="t2">
            <div class="details">Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. Quos esse...</div>
        </div>       
    </div>
</body>
<script src="/Web/hidbar.js"></script>
<script>
var counter = 0;
setInterval(change, 5000);

function change(){ 
    counter++;
    alter();
    if(change>100){
        change=0;
    }
}

function alter(){
    var vasu  = 't'+counter%3;
    var vasu1 = 't'+(counter+1)%3;
    var vasu2 = 't'+(counter+2)%3;
    //console.log(vasu);console.log(vasu1);console.log(vasu2);
    document.getElementById(vasu).style="left:0%;width:100%;height:100%;top:0%;z-index:4;opacity:1;";
     setTimeout(jump,1);
   

}
function jump(){
    var vasu = 't'+counter%3;
    //alert(vasu);
    var vasu1 = 't'+(counter+1)%3;
    var vasu2 = 't'+(counter+2)%3;
    document.getElementById(vasu1).style="left:35%;top:20%;width:50%;height:60%;z-index:3;opacity:0.8;";
    document.getElementById(vasu2).style="left:0%;top:20%;width50%;height:60%;z-index:2;opacity:0.4;";
   
}
if(counter>100){counter=0;}

</script>
</html>